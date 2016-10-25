<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAgrupacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agrupacion', function (Blueprint $table) {

            $table->increments('Id');
            $table->integer('ClasificacionDeportista_Id')->unsigned();
            $table->string('Nombre_Agrupacion');
            $table->timestamps();

            $table->foreign('ClasificacionDeportista_Id')->references('Id')->on('clasificacion_deportista');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agrupacion', function(Blueprint $table){
            $table->dropForeign('ClasificacionDeportista_Id');
        });    
        Schema::drop('agrupacion');
    }
}