<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComidasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comidas', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('alumno_id')->unsigned();
			$table->foreign('alumno_id')->references('id')->on('layout')->onDelete('cascade');


			$table->string('ya_consumiste_alimento');
			$table->string('carne');
			$table->string('pollo');
			$table->string('huevo');
			$table->string('leche');
			$table->string('verduras');
			$table->string('tortillas');
			$table->string('pan');
			$table->string('refresco');


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
		Schema::drop('comidas');
	}

}
