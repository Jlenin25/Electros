<?php

namespace App\Http\Controllers;


use App\Models\Client;
use App\Models\User;
use App\Models\Deliverie;
use App\Models\Statepurchase;

use App\Models\OrdenTrabajo;
use Illuminate\Http\Request;

/**
 * Class OrdenTrabajoController
 * @package App\Http\Controllers
 */
class OrdenTrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenTrabajos = OrdenTrabajo::paginate();

        return view('orden-trabajo.index', compact('ordenTrabajos'))
            ->with('i', (request()->input('page', 1) - 1) * $ordenTrabajos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ordenTrabajo = new OrdenTrabajo();
        $cliente = Client::get();
        $user = User::get();
        $delivery = Deliverie::get();
        $estado = Statepurchase::get();
        return view('orden-trabajo.create', compact('ordenTrabajo','cliente', 'user',
        'delivery','estado'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(OrdenTrabajo::$rules);

        $ordenTrabajo = OrdenTrabajo::create($request->all());

        return redirect()->route('orden-trabajos.index')
            ->with('success', 'OrdenTrabajo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ordenTrabajo = OrdenTrabajo::find($id);

        return view('orden-trabajo.show', compact('ordenTrabajo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ordenTrabajo = OrdenTrabajo::find($id);

        return view('orden-trabajo.edit', compact('ordenTrabajo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  OrdenTrabajo $ordenTrabajo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrdenTrabajo $ordenTrabajo)
    {
        request()->validate(OrdenTrabajo::$rules);

        $ordenTrabajo->update($request->all());

        return redirect()->route('orden-trabajos.index')
            ->with('success', 'OrdenTrabajo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ordenTrabajo = OrdenTrabajo::find($id)->delete();

        return redirect()->route('orden-trabajos.index')
            ->with('success', 'OrdenTrabajo deleted successfully');
    }
}
