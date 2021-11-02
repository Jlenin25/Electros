<?php

namespace App\Http\Requests\Purchase;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'codigo' => 'required',
            // 'id_client' => 'required',
            // 'id_user' => 'required',
            // 'id_expire' => 'required',
            // 'id_coin' => 'required',
            // 'id_deliverie' => 'required',
            // 'id_waytopay' => 'required',
            // 'id_statepurchase' => 'required',
            // 'id_footer' => 'required',
            // 'id_product' => 'required',
        ];
    }

    public function messages() {
        return [
            /* Codigo */
            'codigo.required' => 'Este campo es requerido.',
            // 'id_client.required' => 'Este campo es requerido.',
            // 'id_user.required' => 'Este campo es requerido.',
            // 'id_expire.required' => 'Este campo es requerido.',
            // 'id_coin.required' => 'Este campo es requerido.',
            // 'id_deliverie.required' => 'Este campo es requerido.',
            // 'id_waytopay.required' => 'Este campo es requerido.',
            // 'id_statepurchase.required' => 'Este campo es requerido.',
            // 'id_footer.required' => 'Este campo es requerido.',
            // 'id_condition.required' => 'Este campo es requerido.'
            // 'id_product.required' => 'Este campo es requerido.'
        ];
    }
}