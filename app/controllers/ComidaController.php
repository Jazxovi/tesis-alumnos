<?php

class ComidaController extends \BaseController {

	public function index($id)
	{
		return View::make('registro.alimentacion', compact('id'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /comida/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /comida
	 *
	 * @return Response
	 */
	public function store($id)
	{
		$comida = new Comida();

		$comida->alumno_id=$id;
		$comida->ya_consumiste_alimento=Input::get('ya_consumiste_alimento');
		$comida->carne=Input::get('carne');
		$comida->pollo=Input::get('pollo');
		$comida->huevo=Input::get('huevo');
		$comida->leche=Input::get('leche');
		$comida->verduras=Input::get('verduras');
		$comida->tortillas=Input::get('tortillas');
		$comida->pan=Input::get('pan');
		$comida->refresco=Input::get('refresco');

		$comida->save();

		return Redirect::route('familiares', [$id]);
	}

	/**
	 * Display the specified resource.
	 * GET /comida/{id}
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
	 * GET /comida/{id}/edit
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
	 * PUT /comida/{id}
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
	 * DELETE /comida/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}