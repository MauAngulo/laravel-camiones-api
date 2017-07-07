<?php

use Illuminate\Database\Seeder;

class GastosViajesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gastos_viajes')->delete();
        
        \DB::table('gastos_viajes')->insert(array (
            0 => 
            array (
                'id_viaje' => 1,
                'id_gastos' => 2,
            ),
            1 => 
            array (
                'id_viaje' => 2,
                'id_gastos' => 2,
            ),
            2 => 
            array (
                'id_viaje' => 3,
                'id_gastos' => 2,
            ),
            3 => 
            array (
                'id_viaje' => 1,
                'id_gastos' => 3,
            ),
            4 => 
            array (
                'id_viaje' => 2,
                'id_gastos' => 3,
            ),
            5 => 
            array (
                'id_viaje' => 3,
                'id_gastos' => 3,
            ),
        ));
        
        
    }
}