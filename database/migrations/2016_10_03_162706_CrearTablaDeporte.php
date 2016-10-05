<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDeporte extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deporte', function (Blueprint $table) {

            $table->increments('Id');
            $table->integer('Agrupacion_Id')->unsigned();
            $table->string('Nombre_Deporte');
            $table->timestamps();

            $table->foreign('Agrupacion_Id')->references('Id')->on('agrupacion');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deporte', function(Blueprint $table){
            $table->dropForeign('Agrupacion_Id');
        });    
        Schema::drop('deporte');
    }
}