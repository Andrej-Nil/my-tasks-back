<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class DeleteUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [

            'password'  =>['required', 'string', 'current_password']
        ];
    }

    public function messages()
    {
        return [

            'password.required'    => 'Введите текущий пароль',
            'password.string'      => 'Пароль должен быть строкой',
            'password.current_password'      => 'Пароль неверный',
        ];
    }
}
