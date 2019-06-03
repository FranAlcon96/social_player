<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaParticipa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_equipo')->unsigned();
            $table->bigInteger('id_torneo')->unsigned();
            $table->foreign('id_equipo')->references('id')->on('equipo');
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
        Schema::table('participa', function (Blueprint $table) {
            //
        });
    }
}
