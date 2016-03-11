<?php

class FamiliaController extends \BaseController {

	public function index()
	{
		$data = Aspectosfamiliare::where('alumno_id', $this->getInfoAlumno()->first()->id)->first();
		return View::make('aspectosFamiliares.index', compact('data'));
	}

	public function create()
	{
		return View::make('aspectosFamiliares.create');
	}

	public function store()
	{
		$rules = [
			'que_momento_convive_toda_la_familia'					=> 'required',
			'lugares_que_acudes_con_tu_familia'						=> 'required',
			'como_es_la_comunicacion_con_tu_familia'	      		=> 'required',
			'con_que_miembro_de_tu_familia_existe_mayor_confianza'	=> 'required',
			'nombres'												=> 'required',
			'telefono'												=> 'required',
			'mail'													=> 'required',
			'observaciones'											=> 'required'
		];
		$familiares = new Aspecto();

		$validator = Validator::make(Input::except('_token'), $rules);

		if ($validator->fails()) {
			$messages = $validator->messages();
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$familiares->alumno_id = $this->getInfoAlumno()->first()->id;
		$familiares->que_momento_convive_toda_la_familia = Input::get('que_momento_convive_toda_la_familia');
		$familiares->lugares_que_acudes_con_tu_familia = Input::get('lugares_que_acudes_con_tu_familia');
		$familiares->como_es_la_comunicacion_con_tu_familia = Input::get('como_es_la_comunicacion_con_tu_familia');
		$familiares->con_que_miembro_de_tu_familia_existe_mayor_confianza = Input::get('con_que_miembro_de_tu_familia_existe_mayor_confianza');
		$familiares->nombres = Input::get('nombres');
		$familiares->telefono = Input::get('telefono');
		$familiares->mail = Input::get('mail');
		$familiares->observaciones = Input::get('observaciones');
		$familiares->save();

		return Redirect::route('familiares');
	}

	public function edit()
	{
		$info = Aspecto::where('alumno_id', $this->getInfoAlumno()->first()->id)->first();
		return View::make('aspectosFamiliares.edit', compact('info'));
	}

	public function update()
	{
		$rules = [
			'que_momento_convive_toda_la_familia'					=> 'required',
			'lugares_que_acudes_con_tu_familia'						=> 'required',
			'como_es_la_comunicacion_con_tu_familia'	      		=> 'required',
			'con_que_miembro_de_tu_familia_existe_mayor_confianza'	=> 'required',
			'nombres'												=> 'required',
			'telefono'												=> 'required',
			'mail'													=> 'required',
			'observaciones'											=> 'required'
		];
		$familiares = new Aspecto();

		$validator = Validator::make(Input::except('_token'), $rules);

		if ($validator->fails()) {
			$messages = $validator->messages();
			return Redirect::back()->withInput()->withErrors($validator);
		}
		
		$aspectos = Aspecto::find($this->getInfoAlumno()->first()->id);
		$aspectos->que_momento_convive_toda_la_familia = Input::get('que_momento_convive_toda_la_familia');
		$aspectos->lugares_que_acudes_con_tu_familia = Input::get('lugares_que_acudes_con_tu_familia');
		$aspectos->como_es_la_comunicacion_con_tu_familia = Input::get('como_es_la_comunicacion_con_tu_familia');
		$aspectos->con_que_miembro_de_tu_familia_existe_mayor_confianza = Input::get('con_que_miembro_de_tu_familia_existe_mayor_confianza');
		$aspectos->nombres = Input::get('nombres');
		$aspectos->telefono = Input::get('telefono');
		$aspectos->mail = Input::get('mail');
		$aspectos->observaciones = Input::get('observaciones');
		$aspectos->save();
		return Redirect::route('familiares');
	}

	public function getInfoAlumno()
	{
		$user = Alumno::where('usuario_id', Auth::user()->id);
		return $user;
	}

}