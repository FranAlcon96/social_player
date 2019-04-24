<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMiembrosGrupo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miembro_grupo', function (Blueprint $table) {
            $table->bigInteger('id_usuario')->unsigned();
            $table->bigInteger('id_equipo')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('usuario');
            $table->foreign('id_equipo')->references('id')->on('equipo');
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
        Schema::dropIfExists('miembro_grupo');
    }
}
