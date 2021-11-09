<?php

namespace App\Http\Controllers;

use App\Models\Deliverie;
use Illuminate\Http\Request;

/**
 * Class DeliverieController
 * @package App\Http\Controllers
 */
class DeliverieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliveries = Deliverie::paginate(10);

        return view('deliverie.index', compact('deliveries'))
            ->with('i', (request()->input('page', 1) - 1) * $deliveries->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deliverie = new Deliverie();
        return view('deliverie.create', compact('deliverie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Deliverie::$rules);

        $deliverie = Deliverie::create($request->all());

        return redirect()->route('deliveries.index')
            ->with('success', 'Deliverie created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $deliverie = Deliverie::find($id);

        return view('deliverie.show', compact('deliverie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deliverie = Deliverie::find($id);

        return view('deliverie.edit', compact('deliverie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Deliverie $deliverie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deliverie $deliverie)
    {
        request()->validate(Deliverie::$rules);

        $deliverie->update($request->all());

        return redirect()->route('deliveries.index')
            ->with('success', 'Deliverie updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $deliverie = Deliverie::find($id)->delete();

        return redirect()->route('deliveries.index')
            ->with('success', 'Deliverie deleted successfully');
    }
}
