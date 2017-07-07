<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGastosViajesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gastos_viajes', function(Blueprint $table)
		{
			$table->integer('id_viaje')->nullable()->index('FK__viajes');
			$table->integer('id_gastos')->nullable()->index('FK_gastos_viajes_gastos');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gastos_viajes');
	}

}
