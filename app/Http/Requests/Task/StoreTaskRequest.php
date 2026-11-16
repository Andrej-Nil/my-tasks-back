<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'title'     => ['required', 'string', 'max:255'],
            'description'     => ['nullable', 'string']
        ];
    }

    public function messages()
    {
        return [
            'title.required'    => 'Поле "Название" обязательно для заполнения',
            'title.string'      => 'Поле "Название" должно быть строкой',
            'title.max'         => 'Поле "Название" не должно превышать 255 символов',

            'description.string'      => 'Поле "Описание" должно быть строкой',
        ];
    }
}
