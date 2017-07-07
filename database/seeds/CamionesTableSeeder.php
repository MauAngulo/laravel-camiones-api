<?php

use Illuminate\Database\Seeder;

class CamionesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('camiones')->delete();
        
        \DB::table('camiones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'patente' => 'RR-HH.99',
                'anno' => 2018,
                'marca' => 'Ford',
            ),
            1 => 
            array (
                'id' => 2,
                'patente' => 'HD-00.00',
                'anno' => 1990,
                'marca' => 'Mitsubichi',
            ),
            2 => 
            array (
                'id' => 3,
                'patente' => 'RD-69.69',
                'anno' => 1994,
                'marca' => 'Toyota',
            ),
        ));
        
        
    }
}