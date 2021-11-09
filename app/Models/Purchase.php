<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model {
    use HasFactory;

    protected $fillable = [
        'codigo',
        'id_client',
        'id_user',
        'id_expire',
        'id_coin',
        'id_deliverie',
        'id_waytopay',
        'id_statepurchase',
        'id_footer',
        'id_condition',
        'impuesto',
        'total'
    ];

    public function client() {
        return $this->belongsTo(Client::class, 'id_client');
    }
    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }    
    public function condition() {
        return $this->belongsTo(Condition::class, 'id_condition');
    }    
    public function statepurchase() {
        return $this->belongsTo(Statepurchase::class, 'id_statepurchase');
    }    
    public function expire() {
        return $this->belongsTo(Expire::class, 'id_expire');
    }    
    public function waytopay() {
        return $this->belongsTo(Waytopay::class, 'id_waytopay');
    }    
    public function coin() {
        return $this->belongsTo(Coin::class, 'id_coin');
    }    
    public function footer() {
        return $this->belongsTo(Footer::class, 'id_footer');
    }    
    public function deliverie() {
        return $this->belongsTo(Deliverie::class, 'id_deliverie');
    }
    
    public function purchaseDetails() {
        return $this->hasMany(PurchaseDetails::class, 'id');
    }
}