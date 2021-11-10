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
        'razonsocial',
        'contacto',
        'celular2',
        'email2',
        'id_area',
        'id_user'
    ];
    public function stateclient() {
        return $this->belongsTo(Stateclient::class, 'id_stateclient');
    }
    public function area() {
        return $this->belongsTo(Area::class, 'id_area');
    }
    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function products() {
        return $this->hasMany(Product::class);
    }
    public function purchases() {
        return $this->hasMany(Purchase::class);
    }
}