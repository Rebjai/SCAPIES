<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Alumno\Alumno;
use App\Models\Bachillerato\Area;
use App\Models\Bachillerato\Plantel;
use App\Models\Bachillerato\Subsistema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $alumno = Alumno::where('user_id', $user->id)->first();
        if (!$alumno) {
            $alumno = new Alumno();
        }
        $areas = Area::all()->sortBy('nombre');
        $subsistemas = Subsistema::all()->sortBy('nombre');
        $plantel = new Plantel();
        // dd($user->name);
        return view('dashboard', compact('user', 'alumno', 'subsistemas', 'areas', 'plantel'));
    }
}




?>