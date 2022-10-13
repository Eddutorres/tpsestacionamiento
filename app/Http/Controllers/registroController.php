<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registro;

class registroController extends Controller
{
    public function create(){
        return view ('gestionestacionamiento');
    }

    public function store(Request $request){
        $registroEstacionamiento =  new registro;
        $registroEstacionamiento->patente = $request['patente'];
        $registroEstacionamiento->hora_ingreso=$request['hora_entrada'];
        $registroEstacionamiento->nombre=$request['nombre'];
        $registroEstacionamiento->rut=$request['rut'];
        $registroEstacionamiento->hora_salida=$request['hora_salida'];
        $registroEstacionamiento->save();
        echo($registroEstacionamiento);
        return redirect()->to('/gestionestacionamiento');
    }
}
