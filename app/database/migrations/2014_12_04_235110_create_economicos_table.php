<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEconomicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('economicos', function(Blueprint $table)
		{
			$table->increments('id');


			$table->integer('alumno_id')->unsigned();
			$table->foreign('alumno_id')->references('id')->on('layout')->onDelete('cascade');


			$table->string('sosten_economico');
			$table->string('tipo_vivienda');
			
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('economicos');
	}

}
