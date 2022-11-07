<?php

namespace App\Http\Controllers;

use App\Models\Registro1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Registro1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        /*$texto = trim($request->get('text'));
        $registros1 = DB::table('registro1s')
                        ->select('fecha','id_est','hora_ingreso','hora_salida','rut','patente')
                        ->where('patente','=','%'.$texto.'%')
                        ->orderBy('fecha','asc');

                        $registros1 = $registros1->get();
        return view('registros.index', ['registros1' => $registros1]);*/
        //return view('registros.index', compact('registros1','texto'));

        $registros1 = Registro1::all();
        return view('registros.index', compact('registros1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registro1  $registro1
     * @return \Illuminate\Http\Response
     */
    public function show(Registro1 $registro1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro1  $registro1
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro1 $registro1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registro1  $registro1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro1 $registro1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registro1  $registro1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro1 $registro1)
    {
        //
    }
}
