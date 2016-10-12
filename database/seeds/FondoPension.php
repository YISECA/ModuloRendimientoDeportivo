<?php

use Illuminate\Database\Seeder;

class FondoPension extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fondo_pension')->delete();        
        DB::table('fondo_pension')->insert([                        
            ['Nombre_Fondo_Pension' => 'Colfondos'],
            ['Nombre_Fondo_Pension' => 'Old Mutual Pensiones y Cesantías'],
            ['Nombre_Fondo_Pension' => 'Porvenir'],
            ['Nombre_Fondo_Pension' => 'Protección'],            
             ]);
    }
}
