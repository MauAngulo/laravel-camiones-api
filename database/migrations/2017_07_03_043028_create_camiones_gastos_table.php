<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCamionesGastosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('camiones_gastos', function(Blueprint $table)
		{
			$table->integer('id_camiones')->nullable()->index('FK_gastos_camiones_camiones');
			$table->integer('id_gastos')->nullable()->index('FK_gastos_camiones_gastos');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('camiones_gastos');
	}

}
