<?php

class SocioeconomicoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /socioeconomico
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Socioeconomico::where('alumno_id', $this->getInfoAlumno()->first()->id)->get();
		return View::make('registro.socioeconomico', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /socioeconomico/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /socioeconomico
	 *
	 * @return Response
	 */
	public function store()
	{
		$socioeconomico = new Socioeconomico();

		$socioeconomico->alumno_id = $this->getInfoAlumno()->first()->id;
		//$socioeconomico->sosten_economico = Input::get('sosten_economico');
		//$socioeconomico->tipo_vivienda = Input::get('tipo_vivienda');
		$socioeconomico->parentesco = Input::get('parentesco');
		$socioeconomico->edad = Input::get('edad');
		$socioeconomico->grado_escolar = Input::get('grado_escolar');
		$socioeconomico->ocupacion = Input::get('ocupacion');
		$socioeconomico->lugar_de_trabajo = Input::get('lugar_de_trabajo');
		$socioeconomico->ingreso_mensual = Input::get('ingreso_mensual');
		$socioeconomico->save();

		return Redirect::back();
	}

	/**
	 * Display the specified resource.
	 * GET /socioeconomico/{id}
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
	 * GET /socioeconomico/{id}/edit
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
	 * PUT /socioeconomico/{id}
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
	 * DELETE /socioeconomico/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$socioeconomico = new Socioeconomico();

		$socioeconomico->destroy($id);

		return Redirect::back();
	}

	public function getInfoAlumno()
	{
		$user = Alumno::where('usuario_id', Auth::user()->id);
		return $user;
	}

}