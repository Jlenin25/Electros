<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evaluacion
 *
 * @property $id
 * @property $id_client
 * @property $id_user
 * @property $estado
 * @property $id_deliverie
 * @property $creado
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property Delivery $delivery
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Evaluacion extends Model {
    static $rules = [
		'estado' => 'required',
		'creado' => 'required',
    ];
    protected $perPage = 20;
    
    protected $fillable = [
        'id_client',
        'id_user',
        'estado',
        'id_deliverie',
        'creado'
    ];

    public function client() {
        return $this->hasOne('App\Models\Client', 'id', 'id_client');
    }
    public function delivery() {
        return $this->hasOne('App\Models\Deliverie', 'id', 'id_deliverie');
    }
    public function user() {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }
}