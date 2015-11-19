<?php

class EconomicoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /economico
	 *
	 * @return Response
	 */
	public function index($id)
	{
		return View::make('registro.economico', compact('id'));	
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /economico/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /economico
	 *
	 * @return Response
	 */
	public function store($id)
	{
		$economico= new Economico();

		$economico->alumno_id = $id;
		$economico->sosten_economico = Input::get('sosten_economico');
		$economico->tipo_vivienda = Input::get('tipo_vivienda');

		$economico->save();

		return Redirect::route('fin');
	}

	/**
	 * Display the specified resource.
	 * GET /economico/{id}
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
	 * GET /economico/{id}/edit
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
	 * PUT /economico/{id}
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
	 * DELETE /economico/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}