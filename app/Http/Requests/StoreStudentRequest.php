<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{


    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string',
            'lesson_id' => 'integer',
            'grade_id' => 'integer',
        ];
    }
}