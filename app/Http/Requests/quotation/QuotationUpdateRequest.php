<?php

namespace App\Http\Requests\quotation;

use Illuminate\Foundation\Http\FormRequest;

class QuotationUpdateRequest extends FormRequest
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
            'name' => 'required|min:3|max:100|unique:quotes,name,' . $this->id,
            'description' => 'required|min:3|max:100|unique:quotes,description,' . $this->id,
            'client' => 'required',
            'products' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El :attribute es obligatorio',
            'name.min' => 'El :attribute debe ser mayor a :min caracteres',
            'name.max' => 'El :attribute no debe ser mayor a :max caracteres',
            'name.unique' => 'El :attribute ya se encuentra registrado',
            'description.required' => 'La :attribute es obligatorio',
            'description.min' => 'La :attribute debe ser mayor a :min caracteres',
            'description.max' => 'La :attribute no debe ser mayor a :max caracteres',
            'description.unique' => 'La :attribute ya se encuentra registrado',
            'client.required' => 'Selecione un :attribute',
            'image.required' => 'Seleccione un archivo para cargar la :attribute',
            'image.image' => 'El archivo debe ser una :attribute',
            'image.dimensions' => 'La :attribute debe tener las siguientes dimensiones de Alto: 706 y de Ancho: 421',
            'image.mimes' => 'La :attribute debe ser de tipo: PNG',
            'products.required' => 'Seleccione al menos un :attribute',
        ];
    }

    public function attributes()
    {
        return [
            'name' => "nombre de la cotización",
            'description' => "descripción de la cotización",
            'client' => 'cliente',
            'image' => 'imagen',
            'products' => 'producto',
        ];
    }
}
