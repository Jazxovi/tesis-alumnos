<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAntecedentesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('antecedentes', function(Blueprint $table)
		{
			$table->increments('id');


			
			$table->integer('alumno_id')->unsigned();
			$table->foreign('alumno_id')->references('id')->on('alumnos')->onDelete('cascade');


			$table->string('la_primaria_la_cursaste_en_escuela');
			$table->string('promedio_primaria');
			$table->string('la_secundaria_la_cursaste_en_escuela');
			$table->string('promedio_secundaria');
			$table->string('para_ingresar_al_nivel_bachillerato_tu_primera_opcion_fue');
			$table->string('porque_elegiste_ingresar_a_nuestro_plantel');
			$table->string('padeces_de_alguna_enfermedad_o_discapasidad');
			$table->string('cual');
			$table->string('que_medicamento_tomas');
			$table->string('con_que_frecuencia');
			$table->string('tiempo_empleado_para_transladarte_de_tu_domicilio_al_plantel');

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
		Schema::drop('antecedentes');
	}

}
