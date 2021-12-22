<?php

namespace App\Http\Controllers\Questionaire;

use App\Http\Controllers\Controller;
use App\Models\Alumno\Alumno;
use App\Models\Bachillerato\Area;
use App\Models\Bachillerato\Plantel;
use App\Models\Bachillerato\Subsistema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class questionaireController extends Controller
{
    public function stepTwo(Request $request){
        $alumno = Alumno::where('user_id' , '=', Auth::user()->id)->first();
        return view('questionaire.step_two', compact('alumno'));
    }
    public function stepThree(Request $request){
        $alumno = Alumno::where('user_id' , '=', Auth::user()->id)->first();
        $subsistemas = Subsistema::all();
        $planteles = Plantel::all();
        $areas = Area::all();
        return view('questionaire.step_three', compact('alumno', "subsistemas", "planteles", "areas"));
    }
    public function stepFour(Request $request){
        $alumno = Alumno::where('user_id' , '=', Auth::user()->id)->first();
        $subsistemas = Subsistema::all();
        $planteles = Plantel::all();
        $areas = Area::all();
        return view('questionaire.step_four', compact('alumno'));
    }
    public function generalInfo(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'apellido_materno' => ['required', 'string', 'max:255'],
            'apellido_paterno' => ['required', 'string', 'max:255'],
            'genero' => ['required'],
            'curp' => ['required'],
            'correo' => ['required', 'string', 'email', 'max:255'],
            'telefono' => ['required','string', 'max:255',],
        ]);
        $alumno = Alumno::where('correo', $request->correo)->exists();
        
        if ($alumno) {
            // dd($request->all());
            Alumno::where('correo', $request->correo)->update($request->except('_token'));
            return redirect(route('questionaire.step_two'));
        }
        // dd(array_merge($request->except('_token'), ["user_id" => Auth::user()->id]));
        $alumno = Alumno::create(array_merge($request->except('_token'), ["user_id" => Auth::user()->id]));

        return redirect(route('questionaire.step_two'))->with('success', 'Datos creados exitosamente');
    }
    public function addressInfo(Request $request)
    {
        $request->validate([
            'calle' => ['required', 'string', 'max:255'],
            'numero' => ['required', 'string', 'max:255'],
            'colonia' => ['required', 'string', 'max:255'],
            'localidad' => ['required'],
            'codigo_postal' => ['required','string', 'max:6'],
        ]);
        return redirect(route('questionaire.step_three'));
    }
    public function studies(Request $request)
    {
        $request->validate([
            
        ]);
        return redirect(route('dashboard'));
    }
    public function academicInfo(Request $request)
    {
        $request->validate([
            'plantel_id' => ['required', 'string', 'max:255'],
            'campo_formacion_id' => ['required', 'string', 'max:255'],
            // 'last_name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'confirmed', Password::defaults()],
        ]);
        return redirect(route('questionaire.step_four'));

    }
}
