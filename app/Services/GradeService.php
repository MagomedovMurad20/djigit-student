<?php
namespace App\Services;

use App\Models\Grade;

class gradeService
{
    public function getGradesData()
    {
        return Grade::get()->map(function ($grade) {
            return [
                'name' => $grade->name,
            ];
        });
    }

    public function getGradeData(Grade $grade)
    {
        return [
            'name' => $grade->name,
        ];
    }
}
