<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\registroController;

Route::get('/', function () {
    return view('auth.tpsLogin');
})->middleware('guest');

Route::get('/index', function () {
    return view('index');
});
Route::get('/estacionamientos', function(){
    return view('selectorDeEstacionamiento');
});
/*Route::get('/gestionestacionamientovaras', function(){
    return view('gestionestacionamientovaras');
});

Route::get('/gestionestacionamientoprat', function(){
    return view('gestionestacionamientoprat');
});*/

Route::get('/reportes', function(){
    return view('reportes');
})->middleware('auth');

Route::get('/', [SessionController::class, 'create'])->name('tpsLogin.index');
Route::post('/', [SessionController::class, 'store'])->name('tpsLogin.store');

Route::get('/gestionUsuario', [RegisterController::class, 'create'])
->middleware('auth.admin')->name('gestionUsuario.index');
Route::post('/gestionUsuario', [RegisterController::class, 'store'])->name('gestionUsuario.store');

Route::get('/gestionestacionamientovaras', [registroController::class, 'create'])->name('gestionestacionamientovaras.index');

Route::post('/gestionestacionamientovaras',[registroController::class, 'store'])->name('gestionestacionamientovaras.store');

//Route::get('/gestionestacionamientovaras', [registroController::class, 'update'])->name('gestionestacionamientovaras.update');