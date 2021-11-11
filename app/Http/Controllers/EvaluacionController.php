<?php

namespace App\Http\Controllers;


use App\Models\Client;
use App\Models\User;
use App\Models\Deliverie;
use App\Models\Statepurchase;

use App\Models\Evaluacion;
use Illuminate\Http\Request;
use App\Http\Requests\Purchase\StoreRequest;

/**
 * Class EvaluacionController
 * @package App\Http\Controllers
 */
class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluacions = Evaluacion::paginate();

        return view('evaluacion.index', compact('evaluacions'))
            ->with('i', (request()->input('page', 1) - 1) * $evaluacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evaluacion = new Evaluacion();
        $cliente = Client::get();
        $user = User::get();
        $delivery = Deliverie::get();
        $estado = Statepurchase::get();
        return view('evaluacion.create', compact('evaluacion','cliente', 'user',
        'delivery','estado'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $evaluacion = Evaluacion::create($request->all());

        return redirect()->route('evaluacions.index')
            ->with('success', 'Evaluacion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evaluacion = Evaluacion::find($id);

        return view('evaluacion.show', compact('evaluacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evaluacion = Evaluacion::find($id);

        return view('evaluacion.edit', compact('evaluacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Evaluacion $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluacion $evaluacion)
    {
        request()->validate(Evaluacion::$rules);

        $evaluacion->update($request->all());

        return redirect()->route('evaluacions.index')
            ->with('success', 'Evaluacion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $evaluacion = Evaluacion::find($id)->delete();

        return redirect()->route('evaluacions.index')
            ->with('success', 'Evaluacion deleted successfully');
    }
}
