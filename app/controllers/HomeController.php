
<?php

class HomeController extends BaseController {

	public function home()
	{
		$alumno = Auth::user()
			->join('alumnos', 'users.id', '=', 'alumnos.usuario_id')
			->where('users.id', Auth::user()->id)
			->first();
			
		$alumnoGrupo = DB::table('alumnos')->join('grupos', 'alumnos.grupo_id', '=', 'grupos.id')
			->where('alumnos.usuario_id', Auth::user()->id)
			->first();
		$alumnoTurno =  DB::select('select usuario_id, nombres, grupo, turno from alumnos
			join grupos on alumnos.grupo_id = grupos.id
			join turnos on grupos.turno_id = turnos.id
			where alumnos.usuario_id = ?', [Auth::user()->id]);
		$alumnoSemestre = DB::select('select usuario_id, nombres, grupo, semestre from alumnos
			join grupos on alumnos.grupo_id = grupos.id
			join semestres on grupos.semestre_id = semestres.id
			where alumnos.usuario_id = ?', [Auth::user()->id]);
		$grupo = Grupo::where('status', 1)->get();
		$turno = Turno::all();
		$semestre = Semestre::all();

		return View::make('registro.index', compact('alumno', 'alumnoGrupo', 'alumnoTurno', 'alumnoSemestre','grupo', 'turno', 'semestre'));
	}

	public function store()
	{
		$alumno = Alumno::find(Auth::user()->id);
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
