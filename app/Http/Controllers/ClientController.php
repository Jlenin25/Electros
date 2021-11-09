<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;

class ClientController extends Controller
{
    public function index() {
        $clients = Client::paginate(5);
        return view('admin.client.index', compact('clients'));
    }

    public function create() {
        $client = new Client();
        return view('admin.client.create', compact('client'));
    }
    
    public function store(StoreRequest $request) {
        Client::create($request->all());
        return redirect()->route('clients.index')->with('success','CLIENTE REGISTRADO EXITOSAMENTE');
    }

    public function show(Client $client) {
        //return view('admin.client.show', compact('client'));
    }

    public function edit(Client $client) {
        return view('admin.client.edit', compact('client'));
    }

    public function update(UpdateRequest $request, Client $client) {
        $client->update($request->all());
        return redirect()->route('clients.index')->with('success','CLIENTE ACTUALIZADO EXITOSAMENTE');
    }

    public function destroy(Client $client) {
        $client->delete();
        return redirect()->route('clients.index')->with('success','CLIENTE ELIMINADO EXITOSAMENTE');
    }
}
