<?php

namespace App\Http\Controllers\Bachillerato;

use App\Http\Controllers\Controller;
use App\Models\Bachillerato\Subsistema;
use Illuminate\Http\Request;

class subsistemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subsistemas = Subsistema::all();
        return view('bachillerato.subsistema.index', compact('subsistemas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subsistema = new Subsistema();
        return view('bachillerato.subsistema.create', compact('subsistema'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Subsistema::$rules);
        Subsistema::create($request->all());
        // dd($request->all());
        return redirect()->route('subsistema.index')
        ->with('success', 'Subsistema añadido exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subsistema = Subsistema::find($id);
        return view('bachillerato.plantel.show', compact('subsistema'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subsistema = Subsistema::find($id);
        return view('bachillerato.subsistema.edit', compact('subsistema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(Subsistema::$rules);
        $subsistema = Subsistema::find($id);
        return redirect(route('subsistema.index'))->with('success', 'Subsistema actualizado correctamente');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subsistema::find($id)->delete();
        return redirect(route('subsistema.index'))->with('success', 'Subsistema eliminado correctamente');
    }
}
