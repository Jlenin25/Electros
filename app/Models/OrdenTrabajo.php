<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenTrabajo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_client',
        'id_user',
        'procesado',
        'estado',
        'id_deliverie',
        'creado'
    ];
    public function client() {
        return $this->belongsTo(Client::class, 'id_client');
    }
    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function deliverie() {
        return $this->belongsTo(Deliverie::class, 'id_deliverie');
    }
}