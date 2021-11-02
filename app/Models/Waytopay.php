<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Waytopay
 *
 * @property $id
 * @property $pago
 * @property $created_at
 * @property $updated_at
 *
 * @property Purchase[] $purchases
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Waytopay extends Model
{
    
    static $rules = [
		'pago' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pago'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchases()
    {
        return $this->hasMany('App\Models\Purchase', 'id_waytopay', 'id');
    }
    

}
