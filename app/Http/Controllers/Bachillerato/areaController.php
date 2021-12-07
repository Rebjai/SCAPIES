<?php

namespace App\Http\Controllers\Bachillerato;

use App\Http\Controllers\Controller;
use App\Models\Bachillerato\Area;
use Illuminate\Http\Request;

class areaController extends Controller{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planteles = Area::all();
        return view('bachillerato.area.index', compact('planteles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $area = new Area();
        return view('bachillerato.area.create', 'planteles');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Area::$rules);
        Area::create($request->all());
        return redirect(route('area.index'))->with('succes','Se ha agregado el area correctamente');
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
        $area = Area::find($id);
        return view('bachillerato.area.edit', compact('area'));
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
        $request->validate(Area::$rules);
        $subsistema = Area::find($id);
        return redirect(route('area.index'))->with('success', 'Area actualizado correctamente');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Area::find($id)->delete();
        return redirect(route('area.index'))->with('success', 'Area eliminado correctamente');

    }
}
