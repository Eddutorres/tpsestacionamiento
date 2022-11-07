<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('registro1s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->string('id_est');
            $table->time('hora_ingreso');
            $table->time('hora_salida');
            $table->string('rut');
            $table->string('patente');
            $table->timestamps();

            $table->foreign('id_est')->references('id_est')->on('estacionamientos');
            $table->foreign('rut')->references('rut')->on('personas');
            $table->foreign('patente')->references('patente')->on('vehiculos');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
