<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categoria;
use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;

class ProductController extends Controller
{
    public function index() {
        $products = Product::paginate(5);
        return view('admin.product.index', compact('products'));
    }

    public function create() {
        $product = new Product();
        $categorias = Categoria::get();
        $providers = Provider::get();
        return view('admin.product.create', compact(
            'product',
            'categorias',
            'providers'
        ));
    }

    public function store(StoreRequest $request) {
        if($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $image_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('/imagen'),$image_name);
        };
        $product = Product::create($request->all()+[
            'imagen'=>$image_name,
        ]);
        $product->update(['codigo'=>$product->id]);
        return redirect()->route('products.index')->with('success','PRODUCTO REGISTRADO EXITOSAMENTE');
    }

    public function show(Product $product) {
        return view('admin.product.show', compact('product'));
    }

    public function edit(Product $product) {
        $categorias = Categoria::get();
        $providers = Provider::get();
        return view('admin.product.edit', compact(
            'product',
            'categorias',
            'providers'
        ));
    }

    public function update(UpdateRequest $request, Product $product) {
        $product->update($request->all());
        return redirect()->route('products.index')->with('success','PRODUCTO CREADO EXITOSAMENTE');
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('products.index')->with('success','PRODUCTO ELIMINADO EXITOSAMENTE');
    }
}