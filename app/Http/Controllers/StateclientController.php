<?php

namespace App\Http\Controllers;

use App\Models\Stateclient;
use Illuminate\Http\Request;

/**
 * Class StateclientController
 * @package App\Http\Controllers
 */
class StateclientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stateclients = Stateclient::paginate(10);

        return view('stateclient.index', compact('stateclients'))
            ->with('i', (request()->input('page', 1) - 1) * $stateclients->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stateclient = new Stateclient();
        return view('stateclient.create', compact('stateclient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Stateclient::$rules);

        $stateclient = Stateclient::create($request->all());

        return redirect()->route('stateclients.index')
            ->with('success', 'Stateclient created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stateclient = Stateclient::find($id);

        return view('stateclient.show', compact('stateclient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stateclient = Stateclient::find($id);

        return view('stateclient.edit', compact('stateclient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Stateclient $stateclient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stateclient $stateclient)
    {
        request()->validate(Stateclient::$rules);

        $stateclient->update($request->all());

        return redirect()->route('stateclients.index')
            ->with('success', 'Stateclient updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $stateclient = Stateclient::find($id)->delete();

        return redirect()->route('stateclients.index')
            ->with('success', 'Stateclient deleted successfully');
    }
}
