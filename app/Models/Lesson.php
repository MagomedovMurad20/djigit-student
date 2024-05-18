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
    ];
    public function student()
    {
        return $this->belongsToMany(Student::class);
    }

}
