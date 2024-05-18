<?php

namespace App\Models;

use App\Models\Grade;
use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'lesson_id',
        'grade_id',
    ];


    public function grade()
    {
        return $this->hasOne(Grade::class, 'id', 'grade_id');
    }
    public function lesson()
    {
        return $this->belongsToMany(Lesson::class, 'student_lesson');
    }
}
