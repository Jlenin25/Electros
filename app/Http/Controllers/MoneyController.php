<?php

namespace App\Http\Controllers;

use App\Models\Money;
use Illuminate\Http\Request;

/**
 * Class MoneyController
 * @package App\Http\Controllers
 */
class MoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $money = Money::paginate();

        return view('money.index', compact('money'))
            ->with('i', (request()->input('page', 1) - 1) * $money->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $money = new Money();
        return view('money.create', compact('money'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Money::$rules);

        $money = Money::create($request->all());

        return redirect()->route('money.index')
            ->with('success', 'Money created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $money = Money::find($id);

        return view('money.show', compact('money'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $money = Money::find($id);

        return view('money.edit', compact('money'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Money $money
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Money $money)
    {
        request()->validate(Money::$rules);

        $money->update($request->all());

        return redirect()->route('money.index')
            ->with('success', 'Money updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $money = Money::find($id)->delete();

        return redirect()->route('money.index')
            ->with('success', 'Money deleted successfully');
    }
}
