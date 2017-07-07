<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGastosViajesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('gastos_viajes', function(Blueprint $table)
		{
			$table->foreign('id_viaje', 'FK__viajes')->references('id')->on('viajes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_gastos', 'FK_gastos_viajes_gastos')->references('id')->on('gastos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('gastos_viajes', function(Blueprint $table)
		{
			$table->dropForeign('FK__viajes');
			$table->dropForeign('FK_gastos_viajes_gastos');
		});
	}

}
