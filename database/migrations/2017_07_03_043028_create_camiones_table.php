<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCamionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('camiones', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('patente', 11)->nullable()->unique('patente');
			$table->integer('anno')->nullable();
			$table->string('marca')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('camiones');
	}

}
