<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlumnosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('layout', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('nombres');

			$table->integer('grupo_id')->unsigned();
			$table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');

			$table->integer('turno_id')->unsigned();
			$table->foreign('turno_id')->references('id')->on('turnos')->onDelete('cascade');

			$table->integer('semestre_id')->unsigned();
			$table->foreign('semestre_id')->references('id')->on('semestres')->onDelete('cascade');

			$table->integer('area_id')->unsigned();
			$table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');

			$table->string('fecha_nacimiento');
			$table->string('sexo');
			$table->string('direccion');
			$table->string('colonia');
			$table->string('municipio');
			$table->string('estado');
			$table->string('mail');
			$table->string('estado_civil');
			$table->integer('edad');
			$table->integer('cp');
			$table->string('telefono');


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
		Schema::drop('layout');
	}

}
