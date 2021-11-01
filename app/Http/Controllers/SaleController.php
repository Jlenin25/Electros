<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\Purchase\StoreRequest;
use App\Http\Requests\Purchase\UpdateRequest;

class SaleController extends Controller
{
    public function index() {
        $sales = Sale::get();
        return view('admin.sale.index', compact('sales'));
    }

    public function create() {
        $providers = Client::get();
        return view('admin.sale.create', compact('providers'));
    }
    
    public function store(StoreRequest $request) {
        $sale = Sale::create($request->all());
        foreach($request->id_product as $key=>$product) {
            $results[] = array('id_product'=>$request->id_product[$key], 'descuento'=>$request->descuento[$key], 'precio'=>$request->precio[$key]);
        }
        $sale->saleDetails()->createMany($results);
        return redirect()->route('sales.index');
    }

    public function show(Sale $sale) {
        return view('admin.sale.show', compact('sale'));
    }

    public function edit(Sale $sale) {
        $clients = Client::get();
        return view('admin.sale.edit', compact('sale'));
    }

    public function update(UpdateRequest $request, Sale $sale) {
        // $sale->update($request->all());
        // return redirect()->route('sales.index');
    }

    public function destroy(Sale $sale) {
        // $sale->delete();
        // return redirect()->route('sales.index');
    }
}
