<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMiembro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miembro_equipo', function (Blueprint $table) {
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
        Schema::table('miembro', function (Blueprint $table) {
            //
        });
    }
}
