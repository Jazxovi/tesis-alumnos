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
		return View::make('registro.antecedentes');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /antecedente/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /antecedente
	 *
	 * @return Response
	 */
	public function store($id)
	{
		$antecedente = new Antecedente();
		$antecedente->alumno_id = $id;
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
		
		return Redirect::route('padres', [$id]);

	}

	/**
	 * Display the specified resource.
	 * GET /antecedente/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /antecedente/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /antecedente/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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

}