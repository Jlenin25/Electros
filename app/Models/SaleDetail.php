<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_sale',
        'id_product',
        'cantidad',
        'precio',
        'descuento'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}