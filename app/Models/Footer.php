<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Footer
 *
 * @property $id
 * @property $piepagina
 * @property $created_at
 * @property $updated_at
 *
 * @property Purchase[] $purchases
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Footer extends Model
{
    
    static $rules = [
		'piepagina' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['piepagina'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchases()
    {
        return $this->hasMany('App\Models\Purchase', 'id_footer', 'id');
    }
    

}
