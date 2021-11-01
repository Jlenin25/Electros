<?php

namespace App\Http\Controllers;

use App\Models\Expire;
use Illuminate\Http\Request;

/**
 * Class ExpireController
 * @package App\Http\Controllers
 */
class ExpireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expires = Expire::paginate();

        return view('expire.index', compact('expires'))
            ->with('i', (request()->input('page', 1) - 1) * $expires->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expire = new Expire();
        return view('expire.create', compact('expire'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Expire::$rules);

        $expire = Expire::create($request->all());

        return redirect()->route('expires.index')
            ->with('success', 'Expire created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $expire = Expire::find($id);

        return view('expire.show', compact('expire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expire = Expire::find($id);

        return view('expire.edit', compact('expire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Expire $expire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expire $expire)
    {
        request()->validate(Expire::$rules);

        $expire->update($request->all());

        return redirect()->route('expires.index')
            ->with('success', 'Expire updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $expire = Expire::find($id)->delete();

        return redirect()->route('expires.index')
            ->with('success', 'Expire deleted successfully');
    }
}
