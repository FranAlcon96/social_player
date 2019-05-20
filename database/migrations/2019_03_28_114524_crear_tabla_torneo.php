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
            $table->bigInteger('id_creador')->unsigned();
            $table->string('nombre');
            $table->Integer('equipos');
            $table->Integer('inscripcion_cerrada');
            $table->Integer('finalizado');
            $table->string('imagen');
            $table->longText('texto');
            $table->timestamps();
            $table->foreign('id_juego')->references('id')->on('juego');
            $table->foreign('id_creador')->references('id')->on('usuario');
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
