<?php

use Illuminate\Database\Seeder;

class RegimenSalud extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regimen_salud')->delete();        
        DB::table('regimen_salud')->insert([
            ['Nombre_Regimen_Salud' => 'Contributivo'],
            ['Nombre_Regimen_Salud' => 'Subsidiado'],
            ['Nombre_Regimen_Salud' => 'Excepción'],
        ]);
    }
}
