<?php

class FamiliaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /familia
	 *
	 * @return Response
	 */
	public function index($id)
	{
		return View::make('registro.aspectos_familiares', compact('id'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /familia/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /familia
	 *
	 * @return Response
	 */
	public function store($id)
	{

		$familiares = new Aspecto();

		$familiares->alumno_id = $id;
		$familiares->que_momento_convive_toda_la_familia = Input::get('que_momento_convive_toda_la_familia');
		$familiares->lugares_que_acudes_con_tu_familia = Input::get('lugares_que_acudes_con_tu_familia');
		$familiares->como_es_la_comunicacion_con_tu_familia = Input::get('como_es_la_comunicacion_con_tu_familia');
		$familiares->con_que_miembro_de_tu_familia_existe_mayor_confianza = Input::get('con_que_miembro_de_tu_familia_existe_mayor_confianza');
		$familiares->nombres = Input::get('nombres');
		$familiares->telefono = Input::get('telefono');
		$familiares->mail = Input::get('mail');
		$familiares->observaciones = Input::get('observaciones');

		$familiares->save();

		return Redirect::route('socioeconomico', compact('id'));
	}

	/**
	 * Display the specified resource.
	 * GET /familia/{id}
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
	 * GET /familia/{id}/edit
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
	 * PUT /familia/{id}
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
	 * DELETE /familia/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}