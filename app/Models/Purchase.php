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
        'id_product',
        'impuesto',
        'total'
    ];

    public function client() {
        return $this->blongsTo(Client::class);
    }
    public function user() {
        return $this->blongsTo(User::class);
    }    
    public function condition() {
        return $this->blongsTo(Condition::class);
    }    
    public function statepurchase() {
        return $this->blongsTo(Statepurchase::class);
    }    
    public function expire() {
        return $this->blongsTo(Expire::class);
    }    
    public function waytopay() {
        return $this->blongsTo(Waytopay::class);
    }    
    public function coin() {
        return $this->blongsTo(Coin::class);
    }    
    public function footer() {
        return $this->blongsTo(Footer::class);
    }    
    public function deliverie() {
        return $this->blongsTo(Deliverie::class);
    }
    public function products() {
        return $this->blongsTo(Product::class);
    }

    public function purchaseDetails() {
        return $this->blongsTo(PurchaseDetails::class);
    }
}