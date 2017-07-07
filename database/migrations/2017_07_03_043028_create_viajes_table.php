<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateViajesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('viajes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('carga')->default('0');
			$table->string('cliente')->default('0');
			$table->integer('pago')->default(0);
			$table->integer('bruto')->default(0);
			$table->dateTime('hora_llegada')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('viajes');
	}

}
