<?php

namespace App\Http\Requests\category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:100|unique:categories,name,' . $this->id,
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El :attribute es obligatorio',
            'name.min' => 'El :attribute debe ser mayor a :min caracteres',
            'name.max' => 'El :attribute no debe ser mayor a :max caracteres',
            'name.unique' => 'El :attribute ya ha sido registrado',
        ];
    }

    public function attributes()
    {
        return [
            'name' => "nombre de la categoría",
        ];
    }
}
