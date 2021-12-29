<?php

namespace App\Http\Controllers\Questionaire;

use App\Http\Controllers\Controller;
use App\Models\Alumno\Alumno;
use App\Models\Alumno\DatoAcademico;
use App\Models\Bachillerato\Area;
use App\Models\Bachillerato\Plantel;
use App\Models\Bachillerato\Subsistema;
use App\Models\Direccion;
use App\Models\Universidad\Universidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;

class questionaireController extends Controller
{
    public function stepTwo(Request $request)
    {
        $alumno = Alumno::where('user_id', '=', Auth::user()->id)->first();
        return view('questionaire.step_two', compact('alumno'));
    }
    public function stepThree(Request $request)
    {
        $alumno = Alumno::where('user_id', '=', Auth::user()->id)->first();
        $subsistemas = Subsistema::all();
        $planteles = Plantel::all();
        $areas = Area::all();
        return view('questionaire.step_three', compact('alumno', "subsistemas", "planteles", "areas"));
    }
    public function stepFour(Request $request)
    {
        $alumno = Alumno::where('user_id', '=', Auth::user()->id)->first();
        $causas = DB::table('causas_baja')->get();
        $modelos_educativos = DB::table('modalidad_estudios')->get();
        $universidades = Universidad::all();
        $carrera_no_registrada = null;
        $otra_causa_baja = null;
        return view('questionaire.step_four', compact(
            'alumno',
            'causas',
            'modelos_educativos',
            'universidades',
            'carrera_no_registrada',
            'otra_causa_baja'
        ));
    }
    public function generalInfo(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'apellido_materno' => ['required', 'string', 'max:255'],
            'apellido_paterno' => ['required', 'string', 'max:255'],
            'genero' => ['required'],
            'curp' => ['required', 'max:18'],
            'correo' => ['required', 'string', 'email', 'max:255'],
            'telefono' => ['required', 'string', 'max:10',],
        ]);
        $alumno = Alumno::where('correo', $request->correo)->exists();

        if ($alumno) {
            // dd($request->all());
            Alumno::where('correo', $request->correo)->update($request->except('_token'));
            return redirect(route('questionaire.step_two'))->with('success', 'Datos generales actualizados');
        }
        // dd(array_merge($request->except('_token'), ["user_id" => Auth::user()->id]));
        $alumno = Alumno::create(array_merge($request->except('_token'), ["user_id" => Auth::user()->id]));

        return redirect(route('questionaire.step_two'))->with('success', 'Datos creados exitosamente');
    }
    public function addressInfo(Request $request)
    {
        $request->validate(Direccion::$rules);
        $alumno = Alumno::where("user_id", Auth::user()->id)->first();
        // dd($alumno->direccion());
        if ($alumno->direccion_id) {
            // dd($request->except("_token"));
            // dd($alumno->direccion);
            Direccion::find($alumno->direccion_id)->update($request->except("_token"));
            return redirect(route('questionaire.step_three'))->with('success', 'Dirección actualizada');
        }
        $direccion = new Direccion($request->except("_token"));
        $direccion->save();
        $alumno->direccion()->associate($direccion)->save();
        return redirect(route('questionaire.step_three'))->with('success', 'Dirección creada');
    }
    public function studies(Request $request)
    {
        dd($request->all());
        $continuar = $request->get('continuar_estudios');
        if (!$continuar) {
            $request->validate();
        }
        if($request->has('carrera_no_registrada')){
            //registrar carrera
        }

        $request->validate([
            'apoyo_económico' => 'required',
            'modelo_educativo_id' => 'required',
            'universidad_id' => 'required',
            'carrera_id' => 'required',
            'universidad_2_id' => 'required',
            'carrera_2_id' => 'required',
            'mes' => 'required',
            'folleto_impreso' => 'required',
            'aviso_privacidad' => 'required',
        ]);
        return redirect(route('dashboard'));
    }
    public function academicInfo(Request $request)
    {
        $request->validate([
            'plantel_id' => ['required', 'string', 'max:255'],
            'campo_formacion_id' => ['required', 'string', 'max:255'],
            'subsistema_id' => ['required', 'string', 'max:255'],
            // 'last_name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'confirmed', Password::defaults()],
        ]);
        $alumno = Alumno::where("user_id", Auth::user()->id)->first();
        // dd($alumno);
        if ($alumno->formacion) {
            // dd($request->except("_token"));
            // dd($alumno->datos_academicos_id);
            DatoAcademico::find($alumno->datos_academicos_id)->update($request->except("_token"));
            return redirect(route('questionaire.step_four'))->with('success', 'Dirección actualizada');
        }
        $formacion = new DatoAcademico($request->except("_token"));
        $formacion->save();
        $alumno->formacion()->associate($formacion)->save();

        return redirect(route('questionaire.step_four'))->with('success', 'Dirección creada');
    }
}
