<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGastosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('gastos', function(Blueprint $table)
		{
			$table->foreign('id_registros_iva', 'FK_gastos_registros_iva')->references('id')->on('registros_iva')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_tipo_de_gasto', 'FK_gastos_tipos_de_gasto')->references('id')->on('tipos_de_gasto')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('gastos', function(Blueprint $table)
		{
			$table->dropForeign('FK_gastos_registros_iva');
			$table->dropForeign('FK_gastos_tipos_de_gasto');
		});
	}

}
