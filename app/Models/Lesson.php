<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;


    protected $fillable = [
        'theme' ,
        'description' ,
        'student_id'
    ];
    public function student()
    {
        return $this->hasMany(Student::class);
    }

}
