<?php

namespace App\Http\Controllers;

use App\Models\PurchaseDetails;
use App\Models\Purchase;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Redirect;

class PurchaseDetailsController extends Controller {
    public function index() {
    }
    public function create() {
    }
    public function store(Request $request) {
    }
    public function show(Request $request, $id) {
        $detalles = new PurchaseDetails();
        $purchase = Purchase::findOrFail($id);
        $products = Product::get();
        // $products = \DB::table('Purchase_details')
        //               ->select('Purchase_details.')
        //               ->get();
        return view('admin.purchase.item', compact('purchase','detalles','products'))->with('detalles',$purchase,$products);
    }
    public function edit(PurchaseDetails $detalles) {
    }
    public function update(Request $request, $id) {
        $cotizacion = $request->id_purchase;
        $producto = $request->id_product;
        $cantidad = $request->cantidad;
        $precio = $request->precio;

        $item = new PurchaseDetails();
        $item->id_purchase=$cotizacion;
        $item->id_product=$producto;
        $item->cantidad=$cantidad;
        $item->precio=$precio;
        $item->total=($precio*$cantidad);
        $item->save();

        $detalles = Purchase::findOrFail($id);
        $datoscot['Purchase_details']=PurchaseDetails::paginate(50);
        // $detalles->update($request->all());
        return Redirect::back();
        // return redirect()->route('purchases.index');

    }
    public function destroy($id) {
        PurchaseDetails::destroy($id);
        return Redirect::back();
    }
}