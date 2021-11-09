<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

/**
 * Class FooterController
 * @package App\Http\Controllers
 */
class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footers = Footer::paginate(10);

        return view('footer.index', compact('footers'))
            ->with('i', (request()->input('page', 1) - 1) * $footers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $footer = new Footer();
        return view('footer.create', compact('footer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Footer::$rules);

        $footer = Footer::create($request->all());

        return redirect()->route('footers.index')
            ->with('success', 'Footer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $footer = Footer::find($id);

        return view('footer.show', compact('footer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $footer = Footer::find($id);

        return view('footer.edit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Footer $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
    {
        request()->validate(Footer::$rules);

        $footer->update($request->all());

        return redirect()->route('footers.index')
            ->with('success', 'Footer updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $footer = Footer::find($id)->delete();

        return redirect()->route('footers.index')
            ->with('success', 'Footer deleted successfully');
    }
}
