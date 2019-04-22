<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaJuega extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juega', function (Blueprint $table) {
            $table->bigInteger('id_usuario')->unsigned();
            $table->bigInteger('id_juego')->unsigned();
            $table->date('fecha');
            $table->foreign('id_usuario')->references('id')->on('usuario');
            $table->foreign('id_juego')->references('id')->on('juego');
            $table->primary(array('id_usuario', 'id_juego'));
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
       Schema::dropIfExists('juega');
    }
}
