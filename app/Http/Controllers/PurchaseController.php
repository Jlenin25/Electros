<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Product;
use App\Models\Client;
use App\Models\User;
use App\Models\Expire;
use App\Models\Coin;
use App\Models\Deliverie;
use App\Models\Waytopay;
use App\Models\Statepurchase;
use App\Models\Footer;
use App\Models\Condition;
use App\Models\PurchaseDetails;
use Illuminate\Http\Request;
use App\Http\Requests\Purchase\StoreRequest;
use App\Http\Requests\Purchase\UpdateRequest;

class PurchaseController extends Controller
{
    public function index() {
        $purchases = Purchase::paginate(10);
        return view('admin.purchase.index', compact('purchases'));
    }

    public function create() {
        $purchase = new Purchase();
        $products = Product::get();
        $products = PurchaseDetails::get();
        $cliente = Client::get();
        $user = User::get();
        $expira = Expire::get();
        $coins = Coin::get();
        $delivery = Deliverie::get();
        $pago = Waytopay::get();
        $estado = Statepurchase::get();
        $pie = Footer::get();
        $condicion = Condition::get();
        return view('admin.purchase.create', compact('purchase','products', 'cliente', 'user',
            'expira','coins','delivery','pago','estado',
            'pie','condicion'
        ));
    }
    public function store(StoreRequest $request) {
        $purchase = Purchase::create($request->all());
        // foreach($request->id_product as $key=>$product) {
        //     $results[] = array('id_product'=>$request->id_product[$key], 'cantidad'=>$request->cantidad[$key], 'precioventa'=>$request->precioventa[$key]);
        // }
        // $purchase->purchaseDetails()->createMany($results);
        return redirect()->route('purchases.index')->with('success','NUEVA COTIZACION REGISTRADA EXITOSAMENTE');
    }

    public function show(Purchase $purchase) {
        return view('admin.purchase.show', compact('purchase'));
    }

    public function edit(Purchase $purchase) {
        $product = Product::get();
        $cliente = Client::get();
        $user = User::get();
        $expira = Expire::get();
        $coins = Coin::get();
        $delivery = Deliverie::get();
        $pago = Waytopay::get();
        $estado = Statepurchase::get();
        $pie = Footer::get();
        $condicion = Condition::get();
        return view('admin.purchase.edit', compact(
            'purchase','product', 'cliente', 'user',
            'expira','coins','delivery','pago','estado',
            'pie','condicion'
        ));
    }

    public function update(UpdateRequest $request, Purchase $purchase) {
        $purchase->update($request->all());
        return redirect()->route('purchases.index')->with('success','COTIZACION ACTUALIZADA EXITOSAMENTE');
    }

    public function destroy(Purchase $purchase) {
        $purchase->delete();
        return redirect()->route('purchases.index')->with('success','COTIZACION ELIMINADA EXITOSAMENTE');
    }
}