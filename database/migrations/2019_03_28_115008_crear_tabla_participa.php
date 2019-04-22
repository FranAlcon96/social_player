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
            $table->bigInteger('id_juego');
            $table->bigInteger('id_torneo');
            $table->boolean('estado');  
            $table->primary(array('id_juego', 'id_torneo'));          
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
