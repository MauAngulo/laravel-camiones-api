<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCamionesGastosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('camiones_gastos', function(Blueprint $table)
		{
			$table->foreign('id_camiones', 'FK_gastos_camiones_camiones')->references('id')->on('camiones')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_gastos', 'FK_gastos_camiones_gastos')->references('id')->on('gastos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('camiones_gastos', function(Blueprint $table)
		{
			$table->dropForeign('FK_gastos_camiones_camiones');
			$table->dropForeign('FK_gastos_camiones_gastos');
		});
	}

}
