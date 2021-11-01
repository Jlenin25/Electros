<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Stateclient
 *
 * @property $id
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Client[] $clients
 * @property Provider[] $providers
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Stateclient extends Model
{
    
    static $rules = [
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clients()
    {
        return $this->hasMany('App\Models\Client', 'id_stateclient', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function providers()
    {
        return $this->hasMany('App\Models\Provider', 'id_stateclient', 'id');
    }
    

}
