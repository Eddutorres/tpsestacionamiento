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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('patente')->unique();
            $table->string('rut_persona');
            
            $table->foreign('rut_persona')
                  ->references('rut')
                  ->on('personas')
                  ;
            $table->timestamps();
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
