<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaVPsicosocial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* Schema::create('valoracion_psicosocial', function (Blueprint $table) {

            $table->increments('Id');            
            $table->integer('Deportista_Id')->unsigned();       

            $table->string('MilitarPorque')->nullable(); //Porque de situación militar
            $table->integer('DesplazamientoPreg'); //Ha sufrido desplazamiento
            $table->string('Desplazamiento')->nullable(); //Estado civil
            $table->string('EdadInicio'); //Edad de inicio del deporte
            $table->string('AniosPractica'); //Años que lleva practicando el deporte

            $table->string('P1'); //Estado civil
            $table->string('P2');//Hijos
            $table->string('P3');//Estado civil padres
            //$table->string('P4');//con quien vive (Mas de una opcion)
            $table->string('P5');//Numero de personas con las que vive
            $table->string('P6');//Personas a cargo
            //$table->string('P7');//Responsabilidades familiares (Mas de una opcion)

            $table->string('P8');//Titulo obtenido
            $table->string('P81');//Ultimo titulo
            $table->string('P82');//Institución

            $table->string('P9');//Rendimiento academico
/*
            $table->string('P10');
            $table->string('P11');
            $table->string('P12');
            $table->string('P13');
            $table->string('P14');
            $table->string('P15');
            $table->string('P16');
            $table->string('P17');
            $table->string('P18');
            $table->string('P19');

            $table->string('P20');
            $table->string('P21');
            $table->string('P22');
            $table->string('P23');
            $table->string('P24');
            $table->string('P25');
            $table->string('P26');
            $table->string('P27');
            $table->string('P28');
            $table->string('P29');

            $table->string('P30');
            $table->string('P31');
            $table->string('P32');
            $table->string('P33');
            $table->string('P34');
            $table->string('P35');
            $table->string('P36');
            $table->string('P37');
            $table->string('P38');
            $table->string('P39');

            $table->string('P40');
            $table->string('P41');
            $table->string('P42');
            $table->string('P43');
            $table->string('P44');
            $table->string('P45');
            $table->string('P46');
            $table->string('P47');
            $table->string('P48');
            $table->string('P49');

            $table->string('P50');
            $table->string('P51');
            $table->string('P52');
            $table->string('P53');
            $table->string('P54');
            $table->string('P55');
            $table->string('P56');
            $table->string('P57');
            $table->string('P58');
            $table->string('P59');*/
        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('valoracion_psicosocial');
    }
}