<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:100',
            'email' => 'required|string|email|max:255',
            'lesson_id' => 'integer',
            'grade_id' => 'integer',
        ];
    }
}
