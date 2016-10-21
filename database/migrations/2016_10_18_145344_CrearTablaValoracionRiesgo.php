<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaValoracionRiesgo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('valoracion_riesgo', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('Valoracion_Id')->unsigned();            
            $table->string('Factor');
            $table->string('Objetivo');
            $table->string('Intervencion');
            $table->date('Fecha_Inicio');
            $table->date('Fecha_Fin');
            $table->string('Responsable');
            $table->string('Autorizado');
            $table->string('Seguimiento');
            $table->string('Observacion');
            $table->string('Anexo1');
            $table->string('Anexo2');
            $table->string('Anexo3');
            $table->string('Anexo4');
            $table->timestamps();

            $table->foreign('Valoracion_Id')->references('Id')->on('valoracion_psicosocial');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('valoracion_riesgo', function(Blueprint $table){
            $table->dropForeign('Valoracion_Id');
        });    
        Schema::drop('valoracion_riesgo');
    }
}