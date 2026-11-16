<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserPasswordRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [

            'password'  =>['required', 'string', 'current_password'],
            'new_password'  =>['required', 'string', 'min:6', 'confirmed'],
        ];
    }

    public function messages()
    {
        return [

            'password.required'    => 'Введите текущий пароль',
            'password.string'      => 'Пароль должен быть строкой',
            'password.current_password'      => 'Пароль неверный',

            'new_password.required'    => 'Введите текущий пароль',
            'new_password.string'      => 'Пароль должен быть строкой',
            'new_password.min'      => 'Длина пароля минимум 6 символов'
        ];
    }
}
