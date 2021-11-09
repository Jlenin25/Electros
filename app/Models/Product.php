<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
        'imagen',
        'preciocosto',
        'stock',
        'descripcion',
        'id_provider',
        'fabricante',
        'id_categoria',
        'precioventa',
        'estado',
        'proserv'
    ];

    public function categoria() {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
    public function provider() {
        return $this->belongsTo(Provider::class, 'id_provider');
    }
    public function purchaseDetails() {
        return $this->hasMany(PurchaseDetails::class, 'id');
    }
}
