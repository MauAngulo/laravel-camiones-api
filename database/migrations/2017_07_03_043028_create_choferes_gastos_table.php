<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChoferesGastosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('choferes_gastos', function(Blueprint $table)
		{
			$table->integer('id_choferes')->nullable()->index('FK_gastos_choferes_choferes');
			$table->integer('id_gastos')->nullable()->index('FK_gastos_choferes_gastos');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('choferes_gastos');
	}

}
