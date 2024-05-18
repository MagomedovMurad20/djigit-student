<?php
namespace App\Services;

use App\Models\Lesson;

class LessonService
{
    public function getLessonsData()
    {
        return Lesson::get()->map(function ($lesson) {
            return [
                'theme' => $lesson->theme,
                'description' => $lesson->description,
            ];
        });
    }

    public function getlessonData(Lesson $lesson)
    {
        return [
            'theme' => $lesson->theme,
            'description' => $lesson->description,
        ];
    }
}
