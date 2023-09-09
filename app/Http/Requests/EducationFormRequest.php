<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'course' => 'required',
            'school' => 'required',
            'date_started' => 'required',
            'date_graduated' => 'required',
            'content' => 'required',
        ];
    }
}