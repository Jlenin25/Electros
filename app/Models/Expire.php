<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Expire
 *
 * @property $id
 * @property $expira
 * @property $created_at
 * @property $updated_at
 *
 * @property Purchase[] $purchases
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Expire extends Model
{
    
    static $rules = [
		'expira' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['expira'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchases()
    {
        return $this->hasMany('App\Models\Purchase', 'id_expire', 'id');
    }
    

}
