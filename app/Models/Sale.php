<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_purchase',
        'id_client',
        'venta_fecha',
        'igv',
        'estado'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function client() {
        return $this->belongsTo(Client::class);
    }
    public function saleDetails() {
        return $this->belongsTo(SaleDetail::class);
    }
}