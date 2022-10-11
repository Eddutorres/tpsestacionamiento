<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\registroController;

/*Route::get('/', function () {
    return view('tpsLogin');
});*/

/*Route::get('/gestionUsuario', function () {
    return view('gestionUsuario');
});*/
Route::get('/estacionamientos', function(){
    return view('selectorDeEstacionamiento');
});
Route::get('/gestionestacionamiento', function(){
    return view('gestionestacionamiento');
});

Route::get('/reportes', function(){
    return view('reportes');
});


Route::get('/', [SessionController::class, 'create'])->name('tpsLogin.index');
Route::post('/', [SessionController::class, 'store'])->name('tpsLogin.store');

Route::get('/gestionUsuario', [RegisterController::class, 'create'])->name('gestionUsuario.index');
Route::post('/gestionUsuario', [RegisterController::class, 'store'])->name('gestionUsuario.store');

Route::get('/gestionestacionamiento', [registroController::class, 'create'])->name('gestionestacionamiento.index');
Route::post('/gestionestacionamiento',[registroController::class, 'store'])->name('gestionestacionamiento.store');
