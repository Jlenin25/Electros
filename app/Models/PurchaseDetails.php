<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetails extends Model
{
    use HasFactory;
    protected $table = 'purchase_details';

    protected $fillable = [
        'id_purchase',
        'id_product',
        'cantidad',
        'precio'
    ];

    public function products() {
        return $this->belongsTo(Product::class, 'id_product');
    }
    public function purchase() {
        return $this->belongsTo(Purchase::class, 'id_purchase');
    }
}
