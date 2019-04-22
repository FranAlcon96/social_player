<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTorneo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torneo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_juego')->unsigned();
            $table->Integer('equipos');
            $table->Integer('rondas');
            $table->foreign('id_juego')->references('id')->on('juego');
            $table->timestamps();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('torneo');
    }
}
