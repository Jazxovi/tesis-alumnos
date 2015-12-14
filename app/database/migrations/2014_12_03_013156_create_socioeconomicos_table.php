<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSocioeconomicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('socioeconomicos', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('alumno_id')->unsigned();
			$table->foreign('alumno_id')->references('id')->on('layout')->onDelete('cascade');


			
			$table->string('parentesco');
			$table->integer('edad');
			$table->string('grado_escolar');
			$table->string('ocupacion');
			$table->string('lugar_de_trabajo');
			$table->string('ingreso_mensual');


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
		Schema::drop('socioeconomicos');
	}

}
