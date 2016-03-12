<?php

class AntecedenteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /antecedente
	 *
	 * @return Response
	 */
	public function index( )
	{
		$data = Antecedente::where('alumno_id', $this->getInfoAlumno()->first()->id)->first();
		return View::make('antecedentes.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /antecedente/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('antecedentes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /antecedente
	 *
	 * @return Response
	 */
	public function store()
	{
		$antecedente = new Antecedente();
		$antecedente->alumno_id = $this->getInfoAlumno()->first()->id;
		$antecedente->la_primaria_la_cursaste_en_escuela = Input::get('la_primaria_la_cursaste_en_escuela');
		$antecedente->promedio_primaria = Input::get('promedio_primaria');
		$antecedente->la_secundaria_la_cursaste_en_escuela = Input::get('la_secundaria_la_cursaste_en_escuela');
		$antecedente->promedio_secundaria = Input::get('promedio_secundaria');
		$antecedente->para_ingresar_al_nivel_bachillerato_tu_primera_opcion_fue = Input::get('para_ingresar_al_nivel_bachillerato_tu_primera_opcion_fue');
		$antecedente->porque_elegiste_ingresar_a_nuestro_plantel = Input::get('porque_elegiste_ingresar_a_nuestro_plantel');
		$antecedente->padeces_de_alguna_enfermedad_o_discapasidad = Input::get('padeces_de_alguna_enfermedad_o_discapasidad');
		$antecedente->cual = Input::get('cual');
		$antecedente->que_medicamento_tomas = Input::get('que_medicamento_tomas');
		$antecedente->con_que_frecuencia = Input::get('con_que_frecuencia');
		$antecedente->tiempo_empleado_para_transladarte_de_tu_domicilio_al_plantel = Input::get('tiempo_empleado_para_transladarte_de_tu_domicilio_al_plantel');
		$antecedente->con_que_frecuencia = Input::get('con_que_frecuencia');
		$antecedente->save();
		
		return Redirect::route('antecedentes');

	}

	public function edit()
	{
		$data = Antecedente::where('alumno_id', $this->getInfoAlumno()->first()->id)->first();
		return View::make('antecedentes.edit', compact('data'));
	}

	public function update($id)
	{
		$rules= [
			'la_primaria_la_cursaste_en_escuela'							=> 'required',
			'promedio_primaria'												=> 'required',
			'la_secundaria_la_cursaste_en_escuela'							=> 'required',
			'promedio_secundaria'											=> 'required',
			'para_ingresar_al_nivel_bachillerato_tu_primera_opcion_fue'		=> 'required',
			'porque_elegiste_ingresar_a_nuestro_plantel'					=> 'required',
			'padeces_de_alguna_enfermedad_o_discapasidad'					=> 'required',
			'tiempo_empleado_para_transladarte_de_tu_domicilio_al_plantel'	=> 'required',
		];

		$validator = Validator::make(Input::except('_token'), $rules);

		if ($validator->fails()) {
			$messages = $validator->messages();
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$antecedente =  Antecedente::find($id);
		$antecedente->la_primaria_la_cursaste_en_escuela = Input::get('la_primaria_la_cursaste_en_escuela');
		$antecedente->promedio_primaria = Input::get('promedio_primaria');
		$antecedente->la_secundaria_la_cursaste_en_escuela = Input::get('la_secundaria_la_cursaste_en_escuela');
		$antecedente->promedio_secundaria = Input::get('promedio_secundaria');
		$antecedente->para_ingresar_al_nivel_bachillerato_tu_primera_opcion_fue = Input::get('para_ingresar_al_nivel_bachillerato_tu_primera_opcion_fue');
		$antecedente->porque_elegiste_ingresar_a_nuestro_plantel = Input::get('porque_elegiste_ingresar_a_nuestro_plantel');
		$antecedente->padeces_de_alguna_enfermedad_o_discapasidad = Input::get('padeces_de_alguna_enfermedad_o_discapasidad');
		$antecedente->cual = Input::get('cual');
		$antecedente->que_medicamento_tomas = Input::get('que_medicamento_tomas');
		$antecedente->con_que_frecuencia = Input::get('con_que_frecuencia');
		$antecedente->tiempo_empleado_para_transladarte_de_tu_domicilio_al_plantel = Input::get('tiempo_empleado_para_transladarte_de_tu_domicilio_al_plantel');
		$antecedente->con_que_frecuencia = Input::get('con_que_frecuencia');
		$antecedente->save();

		return Redirect::route('antecedentes');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /antecedente/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function getInfoAlumno()
	{
		$user = Alumno::where('usuario_id', Auth::user()->id);
		return $user;
	}

}