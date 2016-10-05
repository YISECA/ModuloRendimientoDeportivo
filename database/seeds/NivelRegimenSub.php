<?php

use Illuminate\Database\Seeder;

class NivelRegimenSub extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nivel_regimen_sub')->delete();        
        DB::table('nivel_regimen_sub')->insert([
            ['Nombre_Regimen_Sub' => '1'],
            ['Nombre_Regimen_Sub' => '2'],
            ['Nombre_Regimen_Sub' => '3'],
        ]);
    }
}
