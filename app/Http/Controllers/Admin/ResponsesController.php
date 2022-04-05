<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cuestionario;
use Illuminate\Http\Request;

class ResponsesController extends Controller
{
    public function index()
    {
        $respuestas = Cuestionario::with(['alumno', 'baja', 'opciones_carreras','opciones_carreras.carrera'])->paginate(100);
        // dd($respuestas);
        $res = [];
        foreach ($respuestas as $r){
            foreach ($r->opciones_carreras as $opc) {
                array_push($res, $opc);
                # code...
            }
        }
        // dd($res);
    return view('admin.responses.responses', compact('respuestas'));
    }
}
