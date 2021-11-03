<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/questionaire/general_info',[QuestionaireController::class, 'generalInfo'])->name('questionaire.general_info');
Route::post('/questionaire/address_info',[QuestionaireController::class, 'addressInfo'])->name('questionaire.address_info');

require __DIR__.'/auth.php';
