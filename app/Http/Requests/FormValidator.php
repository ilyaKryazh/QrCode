<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidator extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'number' => 'required|integer|min:3|max:10000000',
            'course' => 'required|string|min:3|max:10',
            'name'  => 'required|string|min:3|max:50',
            'date'  => 'required|date|before:' . date('d-m-Y')
        ];
    }
}
