<?php

namespace App\Http\Controllers\Questionaire;

use App\Http\Controllers\Controller;
use App\Models\Alumno\Alumno;
use App\Models\Alumno\BajaAlumno;
use App\Models\Alumno\DatoAcademico;
use App\Models\Bachillerato\Area;
use App\Models\Bachillerato\Plantel;
use App\Models\Bachillerato\Subsistema;
use App\Models\Cuestionario;
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
        $universidad_seleccionada = 0;
        $universidad_seleccionada_2 = 0;

        if ($alumno->cuestionario) {
            $opciones_carrera = $alumno->cuestionario->carreras;
            if ($opciones_carrera) {
                foreach ($opciones_carrera as $opcion_carrera) {
                }
            }

            // dd('cuestionario realizado');
        }
        return view('questionaire.step_four', compact(
            'alumno',
            'causas',
            'modelos_educativos',
            'universidades',
            'carrera_no_registrada',
            'otra_causa_baja',
            'universidad_seleccionada',
            'universidad_seleccionada_2'
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
        // i'm not proud of what i've done, sorry
        $continuar = $request->get('continuar_estudios');
        $alumno = Alumno::where("user_id", Auth::user()->id)->first();
        if (!$alumno->cuestionario) {
            $cuestionario = new Cuestionario([
                "aviso_privacidad" => $request->get('aviso_privacidad'),
                "continuar_estudios" => $request->get('continuar_estudios')
            ]);
            $alumno->cuestionario()->save($cuestionario);
        }
        $alumno->cuestionario->continuar_estudios = $request->get('continuar_estudios');
        $alumno->cuestionario->aviso_privacidad = $request->get('aviso_privacidad');
        $alumno->cuestionario->save();

        if (!$continuar) {

            $request->validate([
                'continuar_estudios' => 'nullable',
                'apoyo_economico' => 'required',
                'causa_baja_id' => 'required',
            ]);
            $this->bajaAlumno($request, $alumno);
        }


        if ($continuar) {

            dd($request->all());
            if ($request->has('carrera_no_registrada')) {
                //registrar carrera
            }

            $request->validate([
                'modelo_educativo_id' => 'required',
                'universidad_id' => 'required',
                'carrera_id' => 'required',
                'universidad_2_id' => 'required',
                'carrera_2_id' => 'required',
                'mes' => 'required',
                'folleto_impreso' => 'required',
                'aviso_privacidad' => 'required',
            ]);
        }
        return redirect(route('thanks'));
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
            return redirect(route('questionaire.step_four'))->with('success', 'Datos académicos actualizados');
        }
        $formacion = new DatoAcademico($request->except("_token"));
        $formacion->save();
        $alumno->formacion()->associate($formacion)->save();

        return redirect(route('questionaire.step_four'))->with('success', 'Datos académicos guardados');
    }

    public function bajaAlumno(Request $request, Alumno $alumno)
    {
        if (!$alumno->cuestionario->baja) {
            $baja = new BajaAlumno([
                'causa_baja_id' => $request->get('causa_baja_id'),
                'apoyo_economico' => $request->get('apoyo_economico'),
            ]);
            $baja->save();
            // $alumno->cuestionario->
            $alumno->cuestionario->baja()->associate($baja)->save();
            dd('asocciated baja');
        }
        if ($request->get('causa_baja_id') == 6) {
            $request->validate(['otra_causa_baja' => 'required']);
            // dd('debes poner la causa');
            $alumno->cuestionario->baja->otra_causa = $request->get('otra_causa_baja');
        } else {
            $alumno->cuestionario->baja->otra_causa = null;
        }

        $alumno->cuestionario->baja->causa_baja_id = $request->get('causa_baja_id');
        $alumno->cuestionario->baja->apoyo_economico = $request->get('apoyo_economico');
        $alumno->cuestionario->baja->save();
    }
}
