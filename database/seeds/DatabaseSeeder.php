<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ViajesTableSeeder::class);
        $this->call(GastosTableSeeder::class);
        $this->call(CamionesTableSeeder::class);
        $this->call(CamionesGastosTableSeeder::class);
        $this->call(ChoferesTableSeeder::class);
        $this->call(ChoferesGastosTableSeeder::class);
        $this->call(GastosViajesTableSeeder::class);
        $this->call(RegistrosIvaTableSeeder::class);
        $this->call(TiposDeGastoTableSeeder::class);
    }
}
