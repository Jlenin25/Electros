<?php

namespace App\Http\Controllers;

use App\Models\OrdenCompra;
use App\Models\Client;
use App\Models\Purchase;
use Illuminate\Http\Request;

class OrdenCompraController extends Controller
{
    public function index() {
        $ordenCompra = OrdenCompra::get();
        return view('admin.ordencompra.index', compact('ordenCompra'));
    }
    public function create() {
        $ordenCompra = new OrdenCompra();
        $cliente = Client::get();
        $cotizacion = Purchase::get();
        return view('admin.ordencompra.create', compact(
            'ordenCompra','cliente','cotizacion'
        ));
    }
    public function store(Request $request) {
        OrdenCompra::create($request->all());
        return redirect()->route('ordencompras.index');
    }
    public function show(OrdenCompra $ordenCompra) {
        return view('admin.ordencompra.show', compact('purchase'));
    }
    public function edit(OrdenCompra $ordenCompra) {
        $cliente = Client::get();
        $cotizacion = Purchase::get();
        return view('admin.ordencompra.edit', compact(
            'ordenCompra','cliente','cotizacion'
        ));
    }
    public function update(Request $request, OrdenCompra $ordenCompra) {
        $ordenCompra->update($request->all());
        return redirect()->route('ordencompras.index');
    }
    public function destroy(OrdenCompra $ordenCompra) {
        $ordenCompra->delete();
        return redirect()->route('ordencompras.index');
    }
}
