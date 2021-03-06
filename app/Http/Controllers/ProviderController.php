<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Requests\Provider\StoreRequest;
use App\Http\Requests\Provider\UpdateRequest;

class ProviderController extends Controller
{
    public function index() {
        $providers = Provider::paginate(10);
        return view('admin.provider.index', compact('providers'));
    }

    public function create() {
        $provider = new Provider();
        return view('admin.provider.create', compact('provider'));
    }
    
    public function store(StoreRequest $request) {
        Provider::create($request->all());
        return redirect()->route('providers.index')->with('success','PROVEEDOR REGISTRADO EXITOSAMENTE');
    }

    public function show(Provider $provider) {
        return view('admin.provider.show', compact('provider'));
    }

    public function edit(Provider $provider) {
        return view('admin.provider.edit', compact('provider'));
    }

    public function update(UpdateRequest $request, Provider $provider) {
        $provider->update($request->all());
        return redirect()->route('providers.index')->with('success','PROVEEDOR ACTUALIZADO EXITOSAMENTE');
    }

    public function destroy(Provider $provider) {
        $provider->delete();
        return redirect()->route('providers.index')->with('success','PROVEEDOR ELIMINADO EXITOSAMENTE');
    }
}