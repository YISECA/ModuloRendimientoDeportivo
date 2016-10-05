<?php

use Illuminate\Database\Seeder;

class TipoAfiliacion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_afiliacion')->delete();        
        DB::table('tipo_afiliacion')->insert([
            ['Nombre_Tipo_Afiliacion' => 'Beneficiario'],
            ['Nombre_Tipo_Afiliacion' => 'Cotizante'],
        ]);
    }
}
