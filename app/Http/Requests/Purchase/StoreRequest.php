<?php

namespace App\Http\Requests\Purchase;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'id_client' => 'required',
            'id_user' => 'required',
            'id_expire' => 'required',
            'id_money' => 'required',
            'id_delivery' => 'required',
            'id_waytopay' => 'required',
            'id_statepurchase' => 'required',
            'id_footer' => 'required',
            'id_condition' => 'required'
        ];
    }

    public function messages() {
        return [
            /* Id - Cliente */
            'id_client.required' => 'Este campo es requerido.',
            /* Id - Asignado */
            'id_user.required' => 'Este campo es requerido.',
            /* Id - Expira 1 */
            'id_expire.required' => 'Este campo es requerido.',
            /* Id - Moneda */
            'id_money.required' => 'Este campo es requerido.',
            /* Id - Tiempo de entrega */
            'id_delivery.required' => 'Este campo es requerido.',
            /* ID - Forma de pago */
            'id_waytopay.required' => 'Este campo es requerido.',
            /* Id - Estado de cotización */
            'id_statepurchase.required' => 'Este campo es requerido.',
            /* Id - Pie de página */
            'id_footer.required' => 'Este campo es requerido.',
            /* Id - Condiciones generales */
            'id_condition.required' => 'Este campo es requerido.'
        ];
    }
}