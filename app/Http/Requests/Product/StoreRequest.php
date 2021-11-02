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
            'nombre' => 'required|string|unique:products|max:255',
            // 'imagen' => 'dimensions:min_width=100,min_height=200',
            'preciocosto' => 'required',
            'descripcion' => 'required|string|max:350',
            'id_provider' => 'integer|required|exists:App\Category,id',
            'fabricante' => 'required|string|max:100',
            'id_category' => 'integer|required|exists:App\Provider,id',
            'precioventa' => 'required'
        ];
    }
    public function messages() {
        return [
            /* Nombre */
            'nombre.required' => 'Este campo es requerido.',
            'nombre.string' => 'El valor no es correcto.',
            'nombre.max' => 'Solo se permite 255 caracteres.',
            'ruc.unique' => 'Ya se encuentra registrado.',
            /* Imagen */
            // 'imagen.string' => 'El valor no es correcto.',
            // 'imagen.dimensions' => 'Solo se permiten imágenes de 100x200 px.',
            /* Precio de Costo */
            'preciocosto' => 'El campo es requerido',
            /* Descripcion */
            'nombre.required' => 'Este campo es requerido.',
            'nombre.string' => 'El valor no es correcto.',
            'nombre.max' => 'Solo se permite 350 caracteres.',
            /* Id - Proveedor */
            'id_provider.integer' => 'El valor tiene que ser entero.',
            'id_provider.required' => 'El campo es requerido.',
            'id_provider.exists' => 'El proveedor no existe.',
            /* Fabricante */
            'fabricante.required' => 'Este campo es requerido.',
            'fabricante.string' => 'El valor no es correcto.',
            'fabricante.max' => 'Solo se permite 100 caracteres.',
            /* Id - Categoria */
            'id_category.integer' => 'El valor tiene que ser entero.',
            'id_category.required' => 'El campo es requerido.',
            'id_category.exists' => 'La categoría no existe.',
            /* Precio de Venta */
            'preciocosto' => 'El campo es requerido',
        ];
    }
}
