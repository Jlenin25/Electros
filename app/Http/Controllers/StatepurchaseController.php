<?php

namespace App\Http\Controllers;

use App\Models\Statepurchase;
use Illuminate\Http\Request;

/**
 * Class StatepurchaseController
 * @package App\Http\Controllers
 */
class StatepurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statepurchases = Statepurchase::paginate(10);

        return view('statepurchase.index', compact('statepurchases'))
            ->with('i', (request()->input('page', 1) - 1) * $statepurchases->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statepurchase = new Statepurchase();
        return view('statepurchase.create', compact('statepurchase'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Statepurchase::$rules);

        $statepurchase = Statepurchase::create($request->all());

        return redirect()->route('statepurchases.index')
            ->with('success', 'Statepurchase created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $statepurchase = Statepurchase::find($id);

        return view('statepurchase.show', compact('statepurchase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $statepurchase = Statepurchase::find($id);

        return view('statepurchase.edit', compact('statepurchase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Statepurchase $statepurchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statepurchase $statepurchase)
    {
        request()->validate(Statepurchase::$rules);

        $statepurchase->update($request->all());

        return redirect()->route('statepurchases.index')
            ->with('success', 'Statepurchase updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $statepurchase = Statepurchase::find($id)->delete();

        return redirect()->route('statepurchases.index')
            ->with('success', 'Statepurchase deleted successfully');
    }
}
