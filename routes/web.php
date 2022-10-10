<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Admincontroller;

Route::get('/', function () {
    return view('auth.tpsLogin');
})->middleware('guest');

/*Route::get('/gestionUsuario', function () {
    return view('gestionUsuario');
});*/

Route::get('/gestionestacionamiento', function(){
    return view('gestionestacionamiento');
});

Route::get('/reportes', function(){
    return view('reportes');
})->middleware('auth');

Route::get('/', [SessionController::class, 'create'])->middleware('guest')->name('tpsLogin.index');
Route::post('/', [SessionController::class, 'store'])->name('tpsLogin.store');

Route::get('/gestionUsuario', [RegisterController::class, 'create'])
->middleware('auth')->name('gestionUsuario.index');
Route::post('/gestionUsuario', [RegisterController::class, 'store'])->name('gestionUsuario.store');

Route::get('/logout', [SessionController::class, 'destroy'])->middleware('auth')
    ->name('tpsLogin.destroy');

Route::get('/admin',[AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');

