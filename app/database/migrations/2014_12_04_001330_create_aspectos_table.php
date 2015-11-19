<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAspectosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aspectos', function(Blueprint $table)
		{
			$table->increments('id');	

			$table->integer('alumno_id')->unsigned();
			$table->foreign('alumno_id')->references('id')->on('alumnos')->onDelete('cascade');

			$table->string('que_momento_convive_toda_la_familia');
			$table->string('lugares_que_acudes_con_tu_familia');
			$table->string('como_es_la_comunicacion_con_tu_familia');
			$table->string('con_que_miembro_de_tu_familia_existe_mayor_confianza');
			$table->string('nombres');
			$table->string('telefono');
			$table->string('mail');
			$table->string('observaciones');
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
		Schema::drop('aspectos');
	}

}
