<?php

use Illuminate\Database\Seeder;

class ViajesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('viajes')->delete();
        
        \DB::table('viajes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'carga' => 'Carne',
                'cliente' => 'A Punto',
                'pago' => 1000000,
                'bruto' => 0,
                'hora_llegada' => '2017-06-29 12:54:13',
            ),
            1 => 
            array (
                'id' => 2,
                'carga' => 'Azúcar',
                'cliente' => 'IANSA',
                'pago' => 300000,
                'bruto' => 1,
                'hora_llegada' => '2017-07-29 12:55:41',
            ),
            2 => 
            array (
                'id' => 3,
                'carga' => 'Verduras',
                'cliente' => 'Feria',
                'pago' => 400000,
                'bruto' => 0,
                'hora_llegada' => '2017-11-28 12:56:51',
            ),
        ));
        
        
    }
}