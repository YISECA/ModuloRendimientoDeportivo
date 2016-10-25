<?php

use Illuminate\Database\Seeder;

class Arl extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('arl')->delete();        
        DB::table('arl')->insert([
            ['Nombre_Arl' => 'Arl Sura'],
            ['Nombre_Arl' => 'Axa Colpatria Seguros S.A.'],
            ['Nombre_Arl' => 'Colmena S.A. Compañía de Seguros de Vida'],
            ['Nombre_Arl' => 'La Equidad Seguros Generales Organismo Cooperativo'],
            ['Nombre_Arl' => 'Liberty Seguros S.A'],
            ['Nombre_Arl' => 'Mapfre Colombia Vida Seguros S.A'],
            ['Nombre_Arl' => 'Positiva Compañía de Seguros S.A.'],
            ['Nombre_Arl' => 'Seguros Alfa S.A. y Seguros de Vida Alfa S.A.'],
            ['Nombre_Arl' => 'Seguros Bolívar S.A.'],
            ]);
    }
}
