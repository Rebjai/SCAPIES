<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Bachillerato\Subsistema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $alumno = null;
        $subsistemas = Subsistema::all();
        // dd($user->name);
        return view('dashboard', compact('user', 'alumno', 'subsistemas'));
    }
}




?>