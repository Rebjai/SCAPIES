<?php

use App\Http\Controllers\Alumno\EstudioController;
use App\Http\Controllers\Bachillerato\areaController;
use App\Http\Controllers\Bachillerato\plantelController;
use App\Http\Controllers\Bachillerato\subsistemaController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Questionaire\questionaireController;
use App\Http\Controllers\Universidad\carrerasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::post('questionaire/general_info', [questionaireController::class, 'generalInfo'])->name('general_info');
Route::get('questionaire/step_two',[questionaireController::class, 'stepTwo'])->name('questionaire.step_two');
Route::get('questionaire/step_three',[questionaireController::class, 'stepThree'])->name('questionaire.step_three');
Route::get('questionaire/step_four',[questionaireController::class, 'stepFour'])->name('questionaire.step_four');
Route::post('questionaire/address_info',[questionaireController::class, 'addressInfo'])->name('questionaire.address_info');
Route::post('questionaire/studies', [questionaireController::class, 'studies'])->name('questionaire.studies');
Route::post('questionaire/academic_info',[questionaireController::class, 'academicInfo'])->name('questionaire.academic_info');
// Route::get('/bachilleratos/plantel',[subsistemaController::class, 'index'])->name('bachilleratos.subsistema.index');
// Route::post('/bachilleratos/planter',[subsistemaController::class, 'store'])->name('bachilleratos.subsistema.store');
// Route::patch('/bachilleratos/plantel/{plantel}',[subsistemaController::class, 'destroy'])->name('bachilleratos.subsistema.destroy');
Route::resource('subsistema', subsistemaController::class);
Route::resource('plantel', plantelController::class);
Route::resource('carreras', carrerasController::class);
Route::resource('area', areaController::class);
Route::resource('estudio', EstudioController::class);
Route::get('respuestas',[ResponsesController::class, 'index'])->middleware(['auth'])->name('responses');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/thanks', function () {
    return view('Thanks');
})->name('thanks');

require __DIR__.'/auth.php';