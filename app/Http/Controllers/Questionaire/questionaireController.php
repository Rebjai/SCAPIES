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
use App\Models\Cuestionario\CuestionarioOpcionesCarrera;
use App\Models\Direccion;
use App\Models\Universidad\Universidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;

use function PHPUnit\Framework\isEmpty;

class questionaireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $carrera_seleccionada = null;
        $carrera_seleccionada_2 = null;

        if ($alumno->cuestionario) {
            $opciones_carrera = $alumno->cuestionario->opciones_carreras;
            // dd($opciones_carrera->where('principal',true)->first()->id);
            if (!$opciones_carrera->isEmpty()) {
                $carrera_seleccionada = $opciones_carrera
                ->where('principal',true)
                ->first();
                $carrera_seleccionada_2 = $opciones_carrera
                ->where('principal',false)
                ->first();
                if (!$carrera_seleccionada->carrera_id) {
                    $carrera_no_registrada = $carrera_seleccionada->carrera_no_registrada;
                    $universidad_seleccionada = 'otra';
                    $carrera_seleccionada = null;
                    // dd($carrera_no_registrada);
                }
                else{
                    $universidad_seleccionada = $carrera_seleccionada->carrera->universidad->id;
                }
                $universidad_seleccionada_2 = $carrera_seleccionada_2->carrera->universidad->id;
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
            'universidad_seleccionada_2',
            'carrera_seleccionada',
            'carrera_seleccionada_2'
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
            $alumno->refresh();
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



            $request->validate([
                'modelo_educativo_id' => 'required',
                'universidad_id' => 'required',
                'carrera_id' => 'required_unless:universidad_id,otra',
                'carrera_no_registrada' => 'required_if:universidad_id,otra',
                'universidad_2_id' => 'required',
                'carrera_2_id' => 'required',
                'mes' => 'required',
                'folleto_impreso' => 'required',
                'aviso_privacidad' => 'required',
            ]);
            $alumno->cuestionario->modalidad_estudios_id = $request->get('modelo_educativo_id');
            $opciones = $alumno->cuestionario->opciones_carreras;
            // dd($request->get('carrera_id'));
            if ($opciones->isEmpty()) {
                $carrera_principal = new CuestionarioOpcionesCarrera(
                    [
                        "principal" => true,
                        "carrera_no_registrada" => $request->get('carrera_no_registrada'),
                        "carrera_id" => $request->get('carrera_id') != 'otra'? $request->get('carrera_id'): null
                    ]
                );
                $carrera_secundaria = new CuestionarioOpcionesCarrera(
                    [
                        "principal" => false,
                        "carrera_id" => $request->get('carrera_2_id')
                    ]
                );
                $alumno->cuestionario->opciones_carreras()->saveMany(
                    [
                        $carrera_principal,
                        $carrera_secundaria
                    ]
                );
                $alumno->refresh();
                // dd('no options, adding');
            }
            if ($opciones->isNotEmpty()) {
                $carrera_principal = $alumno->cuestionario->opciones_carreras()
                ->where('principal',true)->first();
                $carrera_secundaria = $alumno->cuestionario->opciones_carreras()
                ->where('principal',false)->first();
                
                // dd([$carrera_principal, $carrera_secundaria]);
                $carrera_principal->carrera_no_registrada = $request->get('universidad_id') == 'otra'?$request->get('carrera_no_registrada'):null;
                $carrera_principal->carrera_id = $request->get('universidad_id') != 'otra'? $request->get('carrera_id'): null;
                $carrera_secundaria->carrera_id = $request->get('carrera_2_id');
                $carrera_principal->save();
                $carrera_secundaria->save();
                $alumno->push();
                
                // dd($request->get('universidad_id') == 'otra'?$request->get('carrera_no_registrada'):null);

            }

            // delete dropout if adding career options
            if ($alumno->cuestionario->baja) {
                # code...
                $baja = $alumno->cuestionario->baja;
                $alumno->cuestionario->baja()->dissociate();
                $alumno->cuestionario->save();
                $baja->delete();
            }

            // dd($request->all());
        }
        return redirect(route('thanks'));
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
            // dd('asocciated baja');
        }
        if ($request->get('causa_baja_id') == 6) {
            $request->validate(['otra_causa_baja' => 'required']);
            // dd('debes poner la causa');
            $alumno->cuestionario->baja->otra_causa = $request->get('otra_causa_baja');
        } else {
            $alumno->cuestionario->baja->otra_causa = null;
        }

        if ($alumno->cuestionario->opciones_carreras->isNotEmpty()) {
            $alumno->cuestionario->opciones_carreras()->delete();
        }
        
        $alumno->cuestionario->modalidad_estudios_id = null;
        $alumno->cuestionario->baja->causa_baja_id = $request->get('causa_baja_id');
        $alumno->cuestionario->baja->apoyo_economico = $request->get('apoyo_economico');
        $alumno->cuestionario->baja->save();
    }
}
