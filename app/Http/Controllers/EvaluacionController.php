<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use App\Models\Deliverie;
use App\Models\Statepurchase;
use App\Models\Evaluacion;
use Illuminate\Http\Request;

class EvaluacionController extends Controller {
    public function index() {
        $evaluacions = Evaluacion::paginate();

        return view('evaluacion.index', compact('evaluacions'))
            ->with('i', (request()->input('page', 1) - 1) * $evaluacions->perPage());
    }
    public function create() {
        $evaluacion = new Evaluacion();
        $cliente = Client::get();
        $direccion = Client::get();
        $user = User::get();
        $delivery = Deliverie::get();
        $estado = Statepurchase::get();
        return view('evaluacion.create', compact(
            'evaluacion','cliente','direccion','user','delivery','estado'
        ));
    }
    public function store(Request $request) {
        $evaluacion = Evaluacion::create($request->all());
        return redirect()->route('evaluacions.index')
            ->with('success', 'Evaluacion creado con éxito.');
    }
    public function show($id) {
        $evaluacion = Evaluacion::find($id);
        return view('evaluacion.show', compact('evaluacion'));
    }
    public function edit($id) {
        $evaluacion = Evaluacion::find($id);
        $cliente = Client::get();
        $direccion = Client::get();
        $user = User::get();
        $delivery = Deliverie::get();
        $estado = Statepurchase::get();
        return view('evaluacion.edit', compact(
            'evaluacion','cliente','direccion','user','delivery','estado'
        ));
    }
    public function update(Request $request, Evaluacion $evaluacion) {
        request()->validate(Evaluacion::$rules);
        $evaluacion->update($request->all());
        return redirect()->route('evaluacions.index')
            ->with('success', 'Evaluacion actualizado con éxito');
    }
    public function destroy($id) {
        $evaluacion = Evaluacion::find($id)->delete();
        return redirect()->route('evaluacions.index')
            ->with('success', 'Evaluacion deleted successfully');
    }
}