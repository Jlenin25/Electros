<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'codigo' => 'required|string|unique:products|max:9',
            'nombre' => 'required|string|unique:products|max:255',
            'preciocosto' => 'required',
            'descripcion' => 'required|string|max:350',
            'fabricante' => 'required|string|max:100',
            'precioventa' => 'required'
        ];
    }
    public function messages() {
        return [
            /* Codigo */
            'codigo.required' => 'Este campo es requerido.',
            'codigo.string' => 'El valor no es correcto.',
            'codigo.max' => 'Solo se permite 9 caracteres.',
            /* Nombre */
            'nombre.required' => 'Este campo es requerido.',
            'nombre.string' => 'El valor no es correcto.',
            'nombre.max' => 'Solo se permite 255 caracteres.',
            /* Precio de Costo */
            'preciocosto' => 'El campo es requerido',
            /* Descripcion */
            'descripcion.required' => 'Este campo es requerido.',
            'descripcion.string' => 'El valor no es correcto.',
            'descripcion.max' => 'Solo se permite 350 caracteres.',
            /* Fabricante */
            'fabricante.required' => 'Este campo es requerido.',
            'fabricante.string' => 'El valor no es correcto.',
            'fabricante.max' => 'Solo se permite 100 caracteres.',
            /* Precio de Venta */
            'preciocosto' => 'El campo es requerido',
        ];
    }
}
