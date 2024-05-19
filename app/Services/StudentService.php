<?php
namespace App\Services;

use App\Models\Grade;
use App\Models\Lesson;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentService
{
    public function getStudentsData()
    {
        return Student::with('lesson', 'grade')->get()->map(function ($student) {
            return [
                'name' => $student->name,
                'email' => $student->email,
                'grade' => [
                    'name' => $student->grade->name,
                ],
                'lessons' => $student->lesson->map(function ($lesson) {
                    return [
                        'theme' => $lesson->theme,
                        'description' => $lesson->description,
                    ];
                }),
            ];
        });
    }

    public function getStudentData(Student $student)
    {
        $student->load(['grade', 'lesson']);

        return [
            'name' => $student->name,
            'email' => $student->email,
            'grade' => [
                'name' => $student->grade->name,
            ],
            'lesson' => $student->lesson->map(function ($lesson) {
                return [
                    'theme' => $lesson->theme,
                    'description' => $lesson->description,
                ];
            }),
        ];
    }

    public function storeStudent(Request $request)
    {
        $student = Student::create($request->all());
        $lessonIds = explode(',', $request->input('lesson_ids'));
        foreach ($lessonIds as $lessonId) {
            $student->lesson()->attach($lessonId);
        }

        return $student;
    }
}
