<?php

use Illuminate\Database\Seeder;

class ChoferesGastosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('choferes_gastos')->delete();
        
        \DB::table('choferes_gastos')->insert(array (
            0 => 
            array (
                'id_choferes' => 1,
                'id_gastos' => 3,
            ),
            1 => 
            array (
                'id_choferes' => 2,
                'id_gastos' => 3,
            ),
            2 => 
            array (
                'id_choferes' => 3,
                'id_gastos' => 3,
            ),
        ));
        
        
    }
}