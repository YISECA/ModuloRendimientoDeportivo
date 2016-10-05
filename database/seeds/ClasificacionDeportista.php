<?php

use Illuminate\Database\Seeder;

class ClasificacionDeportista extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clasificacion_deportista')->delete();        
        DB::table('clasificacion_deportista')->insert([
            ['Nombre_Clasificacion_Deportista' => 'Convencional'],
            ['Nombre_Clasificacion_Deportista' => 'Paralímpico'],
        ]);
    }
}
