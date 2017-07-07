<?php

use Illuminate\Database\Seeder;

class TiposDeGastoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipos_de_gasto')->delete();
        
        \DB::table('tipos_de_gasto')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tipo_de_gasto' => 'Petroleo',
            ),
            1 => 
            array (
                'id' => 2,
                'tipo_de_gasto' => 'Repuesto',
            ),
            2 => 
            array (
                'id' => 3,
                'tipo_de_gasto' => 'Sueldo',
            ),
            3 => 
            array (
                'id' => 4,
                'tipo_de_gasto' => 'Accidentes',
            ),
            4 => 
            array (
                'id' => 5,
                'tipo_de_gasto' => 'Otros',
            ),
        ));
        
        
    }
}