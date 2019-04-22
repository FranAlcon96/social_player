<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaJuego extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juego', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('desarrollador');
            $table->integer('anio');            
            $table->string('genero');
            $table->string('plataformas');
            $table->string('opiniones');
            $table->decimal('puntuacion_media');
            $table->string('imagen');
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
        Schema::dropIfExists('juego');
    }
}
