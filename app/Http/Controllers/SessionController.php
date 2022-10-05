<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionController extends Controller
{
    public function create(){
        return view ('tpsLogin');
    }

    public function store(){
        if(auth()->attempt(request(['username','password'])) == false){
            return back()->withErrors([
                'message' => 'Usuario o contraseña incorrecta, intentelo de nuevo',
            ]);
        }
        return redirect()->to('gestionUsuario');

    }
}

