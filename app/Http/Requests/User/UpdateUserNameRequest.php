<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserNameRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name'     => ['required', 'string', 'min:2', 'max:255']
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => 'Поле "Название" обязательно для заполнения',
            'name.string'      => 'Поле "Название" должно быть строкой',
            'name.max'         => 'Поле "Название" не должно превышать 255 символов',
        ];
    }
}
