<?php

namespace App\Models;

use App\Models\Grade;
use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function grade()
    {
        return $this->hasOne(Grade::class);
    }
    public function lesson()
    {
        return $this->hasMany(Lesson::class);
    }
}
