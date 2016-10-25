<?php

use Illuminate\Database\Seeder;

class TipoCuenta extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_cuenta')->delete();        
        DB::table('tipo_cuenta')->insert([
            ['Nombre_Tipo_Cuenta' => 'Cuenta ahorros'],            
            ['Nombre_Tipo_Cuenta' => 'Cuenta corriente'],      
        ]);
    }
}
