<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Delivery
 *
 * @property $id
 * @property $entrega
 * @property $created_at
 * @property $updated_at
 *
 * @property Purchase[] $purchases
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Deliverie extends Model
{
    
    static $rules = [
		'entrega' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['entrega'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchases()
    {
        return $this->hasMany('App\Models\Purchase', 'id_deliverie', 'id');
    }
    

}
