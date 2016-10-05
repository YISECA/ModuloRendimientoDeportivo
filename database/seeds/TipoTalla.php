<?php

use Illuminate\Database\Seeder;

class TipoTalla extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_talla')->delete();        
        DB::table('tipo_talla')->insert([
            ['Nombre_Tipo_Talla' => 'Ropa'],
            ['Nombre_Tipo_Talla' => 'Calzado'],
        ]);
    }
}
