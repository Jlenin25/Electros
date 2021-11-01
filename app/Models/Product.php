<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
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
        'id_category',
        'precioventa',
        'estado',
        'proserv'
    ];

    public function category()
    {
        return $this->blongsTo(Category::class);
    }
    public function provider()
    {
        return $this->blongsTo(Provider::class);
    }
}
