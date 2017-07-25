<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class NewQuizRequest extends FormRequest
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
        $rules = [
            'outfit_type' => 'required|array',
        ];

        if (!Auth::check()) {
            $rules['email'] = 'required|email|unique:users,email';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'email.unique' => 'Este email ya está en uso',
        ];
    }
}
