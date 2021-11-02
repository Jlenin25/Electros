<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Coin
 *
 * @property $id
 * @property $moneda
 * @property $created_at
 * @property $updated_at
 *
 * @property Purchase[] $purchases
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Coin extends Model
{
    
    static $rules = [
		'moneda' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['moneda'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchases()
    {
        return $this->hasMany('App\Models\Purchase', 'id_coin', 'id');
    }
    

}
