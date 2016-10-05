<?php

use Illuminate\Database\Seeder;

class EstadoCivil extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_civil')->delete();        
        DB::table('estado_civil')->insert([
            ['Nombre_Estado_Civil' => 'Casado'],
            ['Nombre_Estado_Civil' => 'Divorciado'],
            ['Nombre_Estado_Civil' => 'Soltero'],
            ['Nombre_Estado_Civil' => 'Unión marital de hecho'],
            ['Nombre_Estado_Civil' => 'Viudo'],
        ]);
    }
}
