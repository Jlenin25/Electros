<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;

/**
 * Class DeliveryController
 * @package App\Http\Controllers
 */
class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliveries = Delivery::paginate();

        return view('delivery.index', compact('deliveries'))
            ->with('i', (request()->input('page', 1) - 1) * $deliveries->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $delivery = new Delivery();
        return view('delivery.create', compact('delivery'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Delivery::$rules);

        $delivery = Delivery::create($request->all());

        return redirect()->route('deliveries.index')
            ->with('success', 'Delivery created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $delivery = Delivery::find($id);

        return view('delivery.show', compact('delivery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $delivery = Delivery::find($id);

        return view('delivery.edit', compact('delivery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Delivery $delivery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Delivery $delivery)
    {
        request()->validate(Delivery::$rules);

        $delivery->update($request->all());

        return redirect()->route('deliveries.index')
            ->with('success', 'Delivery updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $delivery = Delivery::find($id)->delete();

        return redirect()->route('deliveries.index')
            ->with('success', 'Delivery deleted successfully');
    }
}
