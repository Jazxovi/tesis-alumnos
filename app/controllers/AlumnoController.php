<?php

class AlumnoController extends \BaseController {

	public function index()
	{
		$user = $this->getInfoAlumno()->first();
		return View::make('alumno.index', compact('user'));
	}

	public function edit()
	{
		$user = $this->getInfoAlumno()->first();
		return View::make('alumno.edit', compact('user'));
	}

	
	public function update()
	{
		$alumno 					= Alumno::find($this->getInfoAlumno()->first()->id);
		//dd(Request::all());
		$alumno->fecha_nacimiento	= Request::get('fecha_nacimiento');
		//if (Request::get('estado') != undefined) {
		$alumno->estado		= Request::get('estado');
		//}
		//if (Request::get('municipio') != null) {
		$alumno->municipio		= Request::get('municipio');
		//}
		$alumno->localidad	= Request::get('localidad');
		$alumno->direccion	= Request::get('direccion');
		$alumno->colonia	= Request::get('colonia');
		$alumno->cp			= Request::get('cp');
		$alumno->telefono	= Request::get('telefono');
		$alumno->save();

		return Redirect::route('alumno');
	}

	public function getInfoAlumno()
	{
		$user = Alumno::where('usuario_id', Auth::user()->id);
		return $user;
	}

}