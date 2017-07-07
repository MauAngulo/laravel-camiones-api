<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToChoferesGastosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('choferes_gastos', function(Blueprint $table)
		{
			$table->foreign('id_choferes', 'FK_gastos_choferes_choferes')->references('id')->on('choferes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_gastos', 'FK_gastos_choferes_gastos')->references('id')->on('gastos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('choferes_gastos', function(Blueprint $table)
		{
			$table->dropForeign('FK_gastos_choferes_choferes');
			$table->dropForeign('FK_gastos_choferes_gastos');
		});
	}

}
