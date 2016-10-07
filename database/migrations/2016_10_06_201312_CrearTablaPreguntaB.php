<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPreguntaB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta_b', function (Blueprint $table) {

            $table->increments('Id');
            $table->integer('ValoracionB_Id')->unsigned();
            $table->integer('Pregunta_Id');
            $table->integer('Respuesta_Id');
            $table->integer('Respuesta');
            $table->string('Descripcion');

            $table->foreign('ValoracionB_Id')->references('Id')->on('valoracion_psicosocial');

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
        Schema::drop('pregunta_b');
    }
}