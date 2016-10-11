<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaClasificacionDeportista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('clasificacion_deportista', function (Blueprint $table) {

            $table->increments('Id');
            $table->string('Nombre_Clasificacion_Deportista');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('claisificacion_deportista');
    }
}