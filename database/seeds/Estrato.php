<?php

use Illuminate\Database\Seeder;

class Estrato extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estrato')->delete();        
        DB::table('estrato')->insert([
            ['Nombre_Estrato' => '1'],
            ['Nombre_Estrato' => '2'],
            ['Nombre_Estrato' => '3'],
            ['Nombre_Estrato' => '4'],
            ['Nombre_Estrato' => '5'],            
            ['Nombre_Estrato' => '6'],
        ]);
    }
}
