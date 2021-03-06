<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaGrupo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_juego')->unsigned();
            $table->bigInteger('id_usuario')->unsigned();
            $table->string('nombre');
            $table->longText('descripcion');
            $table->string('imagen')->nullable();
            $table->integer('miembros');
            $table->timestamps();
            $table->foreign('id_juego')->references('id')->on('juego')->onDelete('cascade');
            $table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupo');
    }
}
