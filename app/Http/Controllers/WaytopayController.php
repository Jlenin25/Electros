<?php

namespace App\Http\Controllers;

use App\Models\Waytopay;
use Illuminate\Http\Request;

/**
 * Class WaytopayController
 * @package App\Http\Controllers
 */
class WaytopayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $waytopays = Waytopay::paginate();

        return view('waytopay.index', compact('waytopays'))
            ->with('i', (request()->input('page', 1) - 1) * $waytopays->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $waytopay = new Waytopay();
        return view('waytopay.create', compact('waytopay'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Waytopay::$rules);

        $waytopay = Waytopay::create($request->all());

        return redirect()->route('waytopays.index')
            ->with('success', 'Waytopay created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $waytopay = Waytopay::find($id);

        return view('waytopay.show', compact('waytopay'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $waytopay = Waytopay::find($id);

        return view('waytopay.edit', compact('waytopay'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Waytopay $waytopay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Waytopay $waytopay)
    {
        request()->validate(Waytopay::$rules);

        $waytopay->update($request->all());

        return redirect()->route('waytopays.index')
            ->with('success', 'Waytopay updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $waytopay = Waytopay::find($id)->delete();

        return redirect()->route('waytopays.index')
            ->with('success', 'Waytopay deleted successfully');
    }
}
