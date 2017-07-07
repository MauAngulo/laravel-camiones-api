<?php

use Illuminate\Database\Seeder;

class RegistrosIvaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('registros_iva')->delete();
        
        \DB::table('registros_iva')->insert(array (
            0 => 
            array (
                'id' => 1,
                'fecha_registro' => '2017-06-01 12:59:34',
            ),
            1 => 
            array (
                'id' => 2,
                'fecha_registro' => '2017-07-01 12:59:39',
            ),
            2 => 
            array (
                'id' => 3,
                'fecha_registro' => '2017-08-01 12:59:48',
            ),
            3 => 
            array (
                'id' => 4,
                'fecha_registro' => '2017-09-01 13:00:03',
            ),
        ));
        
        
    }
}