<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Condition
 *
 * @property $id
 * @property $condiciones
 * @property $created_at
 * @property $updated_at
 *
 * @property Purchase[] $purchases
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Condition extends Model
{
    
    static $rules = [
		'condiciones' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['condiciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchases()
    {
        return $this->hasMany('App\Models\Purchase', 'id_condition', 'id');
    }
    

}
