<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view ('admin.gestionUsuario');
    }

    public function store(){

        $user = User::create(request(['name','apellidop','apellidom','rut','role','password','username']));

        /*auth()->Login($user);*/
        return redirect()->to('gestionUsuario');
    }
}
