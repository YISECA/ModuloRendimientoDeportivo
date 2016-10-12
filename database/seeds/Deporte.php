<?php

use Illuminate\Database\Seeder;

class Deporte extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deporte')->delete();        
        DB::table('deporte')->insert([
            ['Agrupacion_Id'=> 1 , 'Nombre_Deporte' => 'Deporte 11'],
            ['Agrupacion_Id'=> 1 , 'Nombre_Deporte' => 'Deporte 11'],
            ['Agrupacion_Id'=> 2 , 'Nombre_Deporte' => 'Deporte 21'],
            ['Agrupacion_Id'=> 2 , 'Nombre_Deporte' => 'Deporte 21'],
            ['Agrupacion_Id'=> 3 , 'Nombre_Deporte' => 'ParaDeporte 31'],
            ['Agrupacion_Id'=> 3 , 'Nombre_Deporte' => 'ParaDeporte 31'],
        ]);
    }
}
