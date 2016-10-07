<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPreguntaA extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('pregunta_a', function (Blueprint $table) {

            $table->increments('Id');
            $table->integer('ValoracionA_Id')->unsigned();
            $table->integer('PreguntaA_Id');
            $table->integer('Respuesta_Id');
            $table->integer('Respuesta');

            $table->foreign('ValoracionA_Id')->references('Id')->on('valoracion_psicosocial');

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
        Schema::drop('pregunta_a');
    }
}