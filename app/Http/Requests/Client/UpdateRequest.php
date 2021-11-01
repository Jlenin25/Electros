<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'ruc' => 'required|string|max:11|min:11|unique:providers',
            'direccion' => 'nullable|string|max:100',
            'celular1' => 'required|string|min:9|unique:providers,celular1,'.$this->route('provider')->id.'|max:9',
            'email1' => 'nullable|string|unique:providers,email1'.$this->route('provider')->id.'|max:50',
            'paginaweb' => 'required|string|max:30',
            // 'id_estadocliente' => 'nullable|string|max:15',
            'razonsocial' => 'nullable|string|max:15',
            'contacto' => 'required|string|max:50',
            'celular2' => 'nullable|string|min:9|unique:providers,celular2'.$this->route('provider')->id.'|max:9',
            'email2' => 'nullable|string|unique:providers,email2'.$this->route('provider')->id.'|max:50',
            // 'id_area' => 'nullable|string|max:15',
            // 'id_user' => 'nullable|string|max:15'
        ];
    }
    public function messages() {
        return [
            /* RUC */
            'ruc.required' => 'Este campo es requerido.',
            'ruc.string' => 'El valor no es correcto.',
            'ruc.max' => 'Solo se permite 11 caracteres.',
            'ruc.min' => 'Se require de 11 caracteres.',
            'ruc.unique' => 'Ya se encuentra registrado.',
            /* DIRECCION */
            'direccion.string' => 'El valor no es correcto.',
            'direccion.max' => 'Solo se permite 100 caracteres.',
            /* CELULAR 1 */
            'celular1.required' => 'Este campo es requerido.',
            'celular1.string' => 'El valor no es correcto.',
            'celular1.max' => 'Solo se permite 9 caracteres.',
            'celular1.min' => 'Se require de 9 caracteres.',
            'celular1.unique' => 'Ya se encuentra registrado.',
            /* EMAIL 1 */
            'email1.required' => 'Este campo es requerido.',
            'email1.string' => 'El valor no es correcto.',
            'email1.max' => 'Solo se permite 50 caracteres.',
            'email1.unique' => 'Ya se encuentra registrado.',
            /* PAGINA WEB */
            'paginaweb.required' => 'Este campo es requerido.',
            'paginaweb.string' => 'El valor no es correcto.',
            'paginaweb.max' => 'Solo se permite 50 caracteres.',
            /* ID - ESTADO DEL CLIENTE */
            // 'id_estadocliente.string' => 'El valor no es correcto.',
            // 'id_estadocliente.max' => 'Solo se permite 15 caracteres.',
            /* RAZON SOCIAL */
            'razonsocial.string' => 'El valor no es correcto.',
            'razonsocial.max' => 'Solo se permite 15 caracteres.',
            /* CONTACTO */
            'contacto.required' => 'Este campo es requerido.',
            'contacto.string' => 'El valor no es correcto.',
            'contacto.max' => 'Solo se permite 50 caracteres.',
            /* CELULAR 2 */
            'celular2.string' => 'El valor no es correcto.',
            'celular2.max' => 'Solo se permite 9 caracteres.',
            'celular2.min' => 'Se require de 9 caracteres.',
            'celular2.unique' => 'Ya se encuentra registrado.',
            /* EMAIL 2 */
            'email2.string' => 'El valor no es correcto.',
            'email2.max' => 'Solo se permite 50 caracteres.',
            'email2.unique' => 'Ya se encuentra registrado.',
            /* ID - AREA */
            // 'id_area.string' => 'El valor no es correcto.',
            // 'id_area.max' => 'Solo se permite 15 caracteres.',
            /* ID - USUARIO */
            // 'id_user.string' => 'El valor no es correcto.',
            // 'id_user.max' => 'Solo se permite 15 caracteres.'
        ];
    }
}
