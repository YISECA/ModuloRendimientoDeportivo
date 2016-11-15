<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDivision extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('division', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('Tipo_Evaluacion_Id')->unsigned();
            $table->string('Nombre_Division');
            $table->timestamps();

            $table->foreign('Tipo_Evaluacion_Id')->references('Id')->on('tipo_evaluacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('division', function(Blueprint $table){
            $table->dropForeign('Tipo_Evaluacion_Id');
        });    
        Schema::drop('division');
    }
}
