<?php

use Illuminate\Database\Seeder;

class GastosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gastos')->delete();
        
        \DB::table('gastos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'monto_gastos' => 500000,
                'desc_gastos' => 'Tornillos caja de cambio',
                'fecha_gastos' => '2017-07-01 12:59:05',
                'id_tipo_de_gasto' => 2,
                'id_registros_iva' => 2,
            ),
            1 => 
            array (
                'id' => 2,
                'monto_gastos' => 200000,
                'desc_gastos' => 'Petroleo',
                'fecha_gastos' => '2017-06-10 13:04:42',
                'id_tipo_de_gasto' => 1,
                'id_registros_iva' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'monto_gastos' => 150000,
                'desc_gastos' => 'Colaciones - para todos',
                'fecha_gastos' => '2017-06-01 13:05:44',
                'id_tipo_de_gasto' => 4,
                'id_registros_iva' => 1,
            ),
        ));
        
        
    }
}