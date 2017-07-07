<?php

use Illuminate\Database\Seeder;

class CamionesGastosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('camiones_gastos')->delete();
        
        \DB::table('camiones_gastos')->insert(array (
            0 => 
            array (
                'id_camiones' => 1,
                'id_gastos' => 1,
            ),
            1 => 
            array (
                'id_camiones' => 1,
                'id_gastos' => 2,
            ),
            2 => 
            array (
                'id_camiones' => 2,
                'id_gastos' => 2,
            ),
            3 => 
            array (
                'id_camiones' => 3,
                'id_gastos' => 2,
            ),
        ));
        
        
    }
}