<?php

use Illuminate\Database\Seeder;

class Agrupacion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agrupacion')->delete();        
        DB::table('agrupacion')->insert([
            ['ClasificacionDeportista_Id' =>1, 'Nombre_Agrupacion' => 'Agrupacion 1'],
            ['ClasificacionDeportista_Id' =>1, 'Nombre_Agrupacion' => 'Agrupacion 2'],
            ['ClasificacionDeportista_Id' =>2, 'Nombre_Agrupacion' => 'ParaAgrupacion 3'],
        ]);
    }
}
