<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = [
        'ruc',
        'direccion',
        'celular1',
        'email1',
        'paginaweb',
        'id_stateclient',
        'razonsocia',
        'contacto',
        'celular2',
        'email2',
        'id_area',
        'id_user'
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }
    public function purchases() {
        return $this->hasMany(Purchase::class);
    }
}