<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_purchase',
        'id_product',
        'cantidad',
        'precio'
    ];

    public function purcharse() {
        return $this->blongsTo(Purcharse::class);
    }
    public function product() {
        return $this->blongsTo(Product::class);
    }
}
