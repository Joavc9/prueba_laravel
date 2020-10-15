<?php

namespace App\Http\Requests\product;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            'name' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:100',
            'category' => 'required',
            'price' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El :attribute es obligatorio',
            'name.min' => 'El :attribute debe ser mayor a :min caracteres',
            'name.max' => 'El :attribute no debe ser mayor a :max caracteres',
            'description.required' => 'La :attribute es obligatorio',
            'description.min' => 'La :attribute debe ser mayor a :min caracteres',
            'description.max' => 'La :attribute no debe ser mayor a :max caracteres',
            'category.required' => 'Selecione una :attribute',
            'image.required' => 'Seleccione un archivo para cargar la :attribute',
            'image.image' => 'El archivo debe ser una :attribute',
            'image.dimensions' => 'La :attribute debe tener las siguientes dimensiones de Alto: 706 y de Ancho: 421',
            'image.mimes' => 'La :attribute debe ser de tipo: PNG',
            'price.required' => 'El :attribute es obligatorio',
        ];
    }

    public function attributes()
    {
        return [
            'name' => "nombre del producto",
            'description' => "descripción del producto",
            'category' => 'categoría',
            'image' => 'imagen',
            'price' => 'precio',
        ];
    }
}
