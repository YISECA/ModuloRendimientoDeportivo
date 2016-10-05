<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTalla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talla', function (Blueprint $table) {

            $table->increments('Id');            
            $table->integer('Tipo_Talla_Id')->unsigned();            
            $table->integer('Genero_Id')->unsigned();
            $table->string('Eu');
            $table->string('Uk');
            $table->string('Usa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('talla');
    }
}