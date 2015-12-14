
<?php

class HomeController extends BaseController {

	public function home()
	{
		$alumno = "";
		$grupo = Grupo::where('status', 1)->get();
		$turno = Turno::all();
		$semestre = Semestre::all();

		return View::make('registro.index', compact('grupo', 'turno', 'semestre'));
	}

	public function store()
	{
		$alumno = new Alumno;
		$alumno->nombres = Input::get('nombres');
		$alumno->grupo_id = Input::get('grupo_id');
		$alumno->save();

		$x = DB::select('SELECT id FROM layout WHERE nombres = ?
			AND grupo_id = ?',
			[Input::get('nombres'),
			Input::get('grupo_id')]);


		return View::make('registro.datos_generales_del_alumno', compact('x'));
	}

	public function update($id)
	{
		$alumno	= Alumno::find($id);

		$alumno->edad = Input::get('edad');
		$alumno->fecha_nacimiento = Input::get('fecha_nacimiento');
		$alumno->sexo = Input::get('sexo');
		$alumno->municipio = Input::get('municipio');
		$alumno->telefono = Input::get('telefono');
		$alumno->direccion = Input::get('direccion');
		$alumno->colonia = Input::get('colonia');
		$alumno->estado = Input::get('estado');
		$alumno->cp = Input::get('cp');
		$alumno->mail = Input::get('mail');
		$alumno->estado_civil = Input::get('estado_civil');

		$alumno->save();

		return Redirect::route('antecedentes', [$id]);
	}

}
