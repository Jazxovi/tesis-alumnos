<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePadresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('padres', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('alumno_id')->unsigned();
			$table->foreign('alumno_id')->references('id')->on('alumnos')->onDelete('cascade');


			$table->string('nombres_p');
			$table->string('esta_vivo_p');
			$table->string('telefono_p');
			$table->integer('edad_p');
			$table->string('ocupacion_p');
			$table->string('escolaridad_p');
			$table->string('horario_laboral_p');
			$table->string('nombres_m');
			$table->string('esta_vivo_m');
			$table->string('telefono_m');
			$table->integer('edad_m');
			$table->string('ocupacion_m');
			$table->string('escolaridad_m');
			$table->string('horario_laboral_m');
			$table->string('vives_con_tus_padres');
			$table->string('con_quien_vives');
			$table->integer('numero_hermanos');
			$table->string('que_lugar_opupas_en_la_familia');
			


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
		Schema::drop('padres');
	}

}
