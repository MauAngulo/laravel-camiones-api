<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGastosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gastos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('monto_gastos')->nullable();
			$table->string('desc_gastos')->nullable();
			$table->dateTime('fecha_gastos')->nullable();
			$table->integer('id_tipo_de_gasto')->nullable()->index('FK_gastos_tipos_de_gasto');
			$table->integer('id_registros_iva')->nullable()->index('FK_gastos_registros_iva');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gastos');
	}

}
