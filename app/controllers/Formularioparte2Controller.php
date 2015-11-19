<?php

class Formularioparte2Controller extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function home()
	{
		return View::make('registro.datos_generales_del_alumno', compact(''));
	}

	public function store()
	{
		$alumno = new Alumno;
		$alumno->nombres = Input::get('nombres');
		$alumno->grupo = Input::get('grupo');
		$alumno->turno = Input::get('turno');
		$alumno->semestre = Input::get('semestre');
		$alumno->especialidad = Input::get('especialidad');
		//$alumno->save();

		return $alumno;
	}


}
