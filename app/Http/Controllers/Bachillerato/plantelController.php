<?php

namespace App\Http\Controllers\Bachillerato;

use App\Http\Controllers\Controller;
use App\Models\Plantel;
use Illuminate\Http\Request;

class plantelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planteles = Plantel::all();
        return view('bachillerato.plantel.index', compact('planteles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plantel = new Plantel();
        return view('bachillerato.plantel.create', 'planteles');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Plantel::$rules);
        Plantel::create($request->all());
        return redirect(route('plantel.index'))->with('succes','Se ha agregado el plantel correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plantel = Plantel::find($id);
        return view('bachillerato.plantel.edit', compact('plantel'));
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
        $request->validate(Plantel::$rules);
        $subsistema = Plantel::find($id);
        return redirect(route('plantel.index'))->with('success', 'Plantel actualizado correctamente');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Plantel::find($id)->delete();
        return redirect(route('plantel.index'))->with('success', 'Plantel eliminado correctamente');

    }
}
