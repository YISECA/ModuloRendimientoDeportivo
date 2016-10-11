<?php

use Illuminate\Database\Seeder;

class Banco extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banco')->delete();        
        DB::table('banco')->insert([
            ['Nombre_Banco' => 'ANIF'],
            ['Nombre_Banco' => 'Asobancaria'],
            ['Nombre_Banco' => 'BBVA'],
            ['Nombre_Banco' => 'Bancamia'],
            ['Nombre_Banco' => 'Bancolombia'],
            ['Nombre_Banco' => 'Banco Agrario'],
            ['Nombre_Banco' => 'Banco AV Villas'],
            ['Nombre_Banco' => 'Banco Caja Social'],
            ['Nombre_Banco' => 'Banco Colpatria'],
            ['Nombre_Banco' => 'Banco Coomeva'],
            ['Nombre_Banco' => 'Banco Corpbanca'],
            ['Nombre_Banco' => 'Banco de Bogota'],
            ['Nombre_Banco' => 'Banco de la República'],
            ['Nombre_Banco' => 'Banco de Occidente'],
            ['Nombre_Banco' => 'Banco Falabella'],
            ['Nombre_Banco' => 'Banco Finandina'],
            ['Nombre_Banco' => 'Banco GNB Sudameris'],
            ['Nombre_Banco' => 'Banco Pichincha'],
            ['Nombre_Banco' => 'Banco Popular'],
            ['Nombre_Banco' => 'Banco Procredito'],
            ['Nombre_Banco' => 'Banco WWB'],
            ['Nombre_Banco' => 'CitiBank'],
            ['Nombre_Banco' => 'Davivienda'],
            ['Nombre_Banco' => 'Fogafin'],
            ['Nombre_Banco' => 'Helm Bank'],
            ['Nombre_Banco' => 'HSBC Colombia'],
            ['Nombre_Banco' => 'Scotiabank'],
            ['Nombre_Banco' => 'Superfinanciera'],
        ]);
    }
}
