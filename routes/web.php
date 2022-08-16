<?php

use App\Http\Controllers\AlumnoDatosController;
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

/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/', [AlumnoDatosController::class, 'index'])->name('home');

Route::post('/registrar', [AlumnoDatosController::class,'registrar'])->name('registrar');

Route::get('/listar', [AlumnoDatosController::class,'listar']);

Route::get('/listar/{nivel?}', [AlumnoDatosController::class,'listarNivel'])->name('listarNivel');

Route::get('/mostrar/{curp?}', [AlumnoDatosController::class,'mostrar'])->name('mostrarDatos');

Route::resource('/',\App\Models\paranguaricutirimicuaro3::class);

/*Route::get('/inscripcion', function () {
   return view('forms.inscripcion');
})->name('inscripcion');*/

/*Route::get('/reinscripcion', function () {
    return view('forms.reinscripcion');
})->name('reinscripcion');*/

//Route::post('user/updatemail', [\App\Http\Controllers\RegistroMailController::class, 'validateMail'])->name('validateMail')->middleware('auth');
