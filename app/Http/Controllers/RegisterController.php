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
        
        $user = User::create(request(['name','apellidop','apellidom','rut','optionlist','password','username']));

    public function destroy($id){
        $users = User::find($id);
        $users->delete();
        return redirect()->to('gestionUsuario')->with('success','Tarea Eliminada');
    }
}
