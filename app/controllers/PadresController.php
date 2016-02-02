<?php

class PadresController extends \BaseController {

	public function index()
	{
		return View::make('registro.padres');
	}

	public function create()
	{
		//
	}

	public function store($id)
	{
		$padre = new Padre();

		$padre->alumno_id = $id;
		$padre->nombres_p =Input::get('nombres_p');
		$padre->esta_vivo_p =Input::get('esta_vivo_p');
		$padre->telefono_p =Input::get('telefono_p');
		$padre->edad_p =Input::get('edad_p');
		$padre->ocupacion_p =Input::get('ocupacion_p');
		$padre->escolaridad_p =Input::get('escolaridad_p');
		$padre->horario_laboral_p =Input::get('horario_laboral_p');
		$padre->nombres_m =Input::get('nombres_m');
		$padre->esta_vivo_m =Input::get('esta_vivo_m');
		$padre->telefono_m =Input::get('telefono_m');
		$padre->edad_m =Input::get('edad_m');
		$padre->ocupacion_m =Input::get('ocupacion_m');
		$padre->escolaridad_m =Input::get('escolaridad_m');
		$padre->horario_laboral_m =Input::get('horario_laboral_m');
		$padre->vives_con_tus_padres =Input::get('vives_con_tus_padres');
		$padre->con_quien_vives =Input::get('con_quien_vives');
		$padre->numero_hermanos =Input::get('numero_hermanos');
		$padre->que_lugar_ocupas_en_la_familia =Input::get('que_lugar_ocupas_en_la_familia');

		$padre->save();

		return Redirect::route('alimentacion', [$id]);
	}

	/**
	 * Display the specified resource.
	 * GET /padres/{id}
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
	 * GET /padres/{id}/edit
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
	 * PUT /padres/{id}
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
	 * DELETE /padres/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}