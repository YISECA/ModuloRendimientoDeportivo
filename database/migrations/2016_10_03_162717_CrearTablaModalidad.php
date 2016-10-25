<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaModalidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('modalidad', function (Blueprint $table) {

            $table->increments('Id');
            $table->integer('Deporte_Id')->unsigned();
            $table->string('Nombre_Modalidad');
            $table->timestamps();

            $table->foreign('Deporte_Id')->references('Id')->on('deporte');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('modalidad', function(Blueprint $table){
            $table->dropForeign('Deporte_Id');
        });    
        Schema::drop('modalidad');
    }
}