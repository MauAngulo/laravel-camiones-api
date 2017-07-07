<?php

use Illuminate\Database\Seeder;

class ChoferesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('choferes')->delete();
        
        \DB::table('choferes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nom_comp' => 'Jorge Luke',
                'numero_tel' => '11381138',
            ),
            1 => 
            array (
                'id' => 2,
                'nom_comp' => 'Pedro Henriquez',
                'numero_tel' => '88990011',
            ),
            2 => 
            array (
                'id' => 3,
                'nom_comp' => 'Master Chofer',
                'numero_tel' => '77777777',
            ),
        ));
        
        
    }
}