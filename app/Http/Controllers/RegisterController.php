<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view ('gestionUsuario');
    }

    public function store(){
        
        $user = User::create(request(['name','apellidop','apellidom','rut','role','password','username']));

        auth()->login($user);
        return redirect()->to('/');
    }
}
