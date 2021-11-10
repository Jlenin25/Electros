<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenCompra extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'id_client',
        'descripcion',
        'archivo',
        'id_purchase',
        'id_deliverie'
    ];
    public function client() {
        return $this->belongsTo(Client::class, 'id_client');
    }
    public function purchase() {
        return $this->belongsTo(Purchase::class, 'id_purchase');
    }
    public function deliverie() {
        return $this->belongsTo(Deliverie::class, 'id_deliverie');
    }
}