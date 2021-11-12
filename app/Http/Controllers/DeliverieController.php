<?php

namespace App\Http\Controllers;

use App\Models\Deliverie;
use Illuminate\Http\Request;

class DeliverieController extends Controller {
    public function index() {
        $deliveries = Deliverie::paginate(10);
        return view('deliverie.index', compact('deliveries'))
            ->with('i', (request()->input('page', 1) - 1) * $deliveries->perPage());
    }
    public function create() {
        $deliverie = new Deliverie();
        return view('deliverie.create', compact('deliverie'));
    }
    public function store(Request $request) {
        request()->validate(Deliverie::$rules);
        $deliverie = Deliverie::create($request->all());
        return redirect()->route('deliveries.index')
            ->with('success', 'Deliverie created successfully.');
    }
    public function show($id) {
        $deliverie = Deliverie::find($id);
        return view('deliverie.show', compact('deliverie'));
    }
    public function edit($id) {
        $deliverie = Deliverie::find($id);
        return view('deliverie.edit', compact('deliverie'));
    }
    public function update(Request $request, Deliverie $deliverie) {
        request()->validate(Deliverie::$rules);
        $deliverie->update($request->all());
        return redirect()->route('deliveries.index')
            ->with('success', 'Deliverie updated successfully');
    }
    public function destroy($id) {
        $deliverie = Deliverie::find($id)->delete();
        return redirect()->route('deliveries.index')
            ->with('success', 'Deliverie deleted successfully');
    }
}