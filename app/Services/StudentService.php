<?php
namespace App\Services;

use App\Models\Grade;
use App\Models\Lesson;
use App\Models\Student;

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
}
