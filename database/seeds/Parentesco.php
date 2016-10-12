<?php

use Illuminate\Database\Seeder;

class Parentesco extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parentesco')->delete();        
        DB::table('parentesco')->insert([
            ['Nombre_Parentesco' => 'Hijo(a)'],
            ['Nombre_Parentesco' => 'Hermano(a)'],
            ['Nombre_Parentesco' => 'Padre(Madre)'],
            ['Nombre_Parentesco' => 'Tío(a)'],
            ['Nombre_Parentesco' => 'Sobrino(a)'],
            ['Nombre_Parentesco' => 'Esposo(a)'],
        ]);
    }
}
