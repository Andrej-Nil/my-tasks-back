<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserEmailRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'email'     => [
                'required',
                'string',
                'email',
                Rule::unique('users', 'email')->ignore(auth()->id()),
            ],
            'password'  =>['required', 'string', 'current_password'],
        ];
    }

    public function messages()
    {
        return [
            'email.required'    => 'Поле "Почта" обязательно для заполнения',
            'email.string'      => 'Поле "Почта" должно быть строкой',
            'email.email'    => 'Введите корректный адрес электронной почты',
            'email.unique'   => 'Такая почта уже используется',

            'password.required'    => 'Введите текущий пароль',
            'password.string'      => 'Пароль должен быть строкой',
            'password.current_password'      => 'Пароль неверный',
        ];
    }
}
