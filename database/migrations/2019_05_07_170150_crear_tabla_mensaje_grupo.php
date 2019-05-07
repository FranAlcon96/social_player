<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMensajeGrupo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensaje', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('texto');
            $table->bigInteger('id_usuario')->unsigned();
            $table->bigInteger('id_grupo')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('usuario');
            $table->foreign('id_grupo')->references('id')->on('grupo');
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
        Schema::dropIfExists('mensaje');
    }
}
