<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Provider;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Purchase\StoreRequest;
use App\Http\Requests\Purchase\UpdateRequest;

class PurchaseController extends Controller
{
    public function index() {
        $purchases = Purchase::get();
        return view('admin.purchase.index', compact('purchases'));
    }

    public function create() {
        $purchase = new Purchase();
        $providers = Provider::get();
        $product = Product::get();
        return view('admin.purchase.create', compact('purchase','providers','product'));
    }
    
    public function store(StoreRequest $request) {
        $purchase = Purchase::create($request->all());
        // foreach($request->id_product as $key=>$product) {
        //     $results[] = array('id_product'=>$request->id_product[$key], 'cantidad'=>$request->cantidad[$key], 'precio'=>$request->precio[$key]);
        // }
        // $purchase->purchaseDetails()->createMany($results);
        return redirect()->route('purchases.index');
    }

    public function show(Purchase $purchase) {
        return view('admin.purchase.show', compact('purchase'));
    }

    public function edit(Purchase $purchase) {
        $providers = Provider::get();
        $product = Product::get();
        return view('admin.purchase.edit', compact('purchase','product'));
    }

    public function update(UpdateRequest $request, Purchase $purchase) {
        $purchase->update($request->all());
        return redirect()->route('purchases.index');
    }

    public function destroy(Purchase $purchase, Product $product) {
        $purchase->delete();
        $product->delete();
        return redirect()->route('purchases.index');
    }
}