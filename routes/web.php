<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

/*Route::get('/', function () {
    return view('tpsLogin');
});*/

/*Route::get('/gestionUsuario', function () {
    return view('gestionUsuario');
});*/
Route::get('/estacionamientos', function(){
    return view('selectorDeEstacionamiento');
});
Route::get('/gestionestacionamientovaras', function(){
    return view('gestionestacionamientovaras');
});

Route::get('/gestionestacionamientoprat', function(){
    return view('gestionestacionamientoprat');
});

Route::get('/reportes', function(){
    return view('reportes');
});

Route::get('/chanchitoFeliz', function(){
    return view('chanchitoFeliz');
});



Route::get('/', [SessionController::class, 'create'])->name('tpsLogin.index');
Route::post('/', [SessionController::class, 'store'])->name('tpsLogin.store');

Route::get('/gestionUsuario', [RegisterController::class, 'create'])->name('gestionUsuario.index');
Route::post('/gestionUsuario', [RegisterController::class, 'store'])->name('gestionUsuario.store');

