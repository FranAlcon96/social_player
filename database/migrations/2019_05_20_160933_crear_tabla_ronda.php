<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRonda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ronda', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_equipo_local')->unsigned();
            $table->bigInteger('id_equipo_visitante')->unsigned();
            $table->bigInteger('id_torneo')->unsigned();
            $table->bigInteger('ganador')->nullable();
            $table->bigInteger('perdedor')->nullable();
            $table->Integer('empate')->nullable();
            $table->foreign('id_equipo_local')->references('id')->on('equipo');
            $table->foreign('id_equipo_visitante')->references('id')->on('equipo');
            $table->foreign('id_torneo')->references('id')->on('torneo');
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
        Schema::dropIfExists('ronda');
    }
}
