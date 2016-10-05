<?php

use Illuminate\Database\Seeder;

class Modalidad extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modalidad')->delete();        
        DB::table('modalidad')->insert([
            ['Deporte_Id'=> 1 , 'Nombre_Modalidad' => 'Modalidad 111'],
            ['Deporte_Id'=> 1 , 'Nombre_Modalidad' => 'Modalidad 112'],
            ['Deporte_Id'=> 2 , 'Nombre_Modalidad' => 'Modalidad 121'],
            ['Deporte_Id'=> 2 , 'Nombre_Modalidad' => 'Modalidad 121'],
            ['Deporte_Id'=> 3 , 'Nombre_Modalidad' => 'Modalidad 231'],
            ['Deporte_Id'=> 3 , 'Nombre_Modalidad' => 'Modalidad 232'],
            ['Deporte_Id'=> 4 , 'Nombre_Modalidad' => 'Modalidad 241'],
            ['Deporte_Id'=> 4 , 'Nombre_Modalidad' => 'Modalidad 242'],
            ['Deporte_Id'=> 5 , 'Nombre_Modalidad' => 'ParaModalidad 351'],
            ['Deporte_Id'=> 5 , 'Nombre_Modalidad' => 'ParaModalidad 352'],
            ['Deporte_Id'=> 6 , 'Nombre_Modalidad' => 'ParaModalidad 361'],
            ['Deporte_Id'=> 6 , 'Nombre_Modalidad' => 'ParaModalidad 362'],
            
        ]);
    }
}
