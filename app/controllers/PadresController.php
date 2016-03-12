<?php

class PadresController extends \BaseController {

	public function index()
	{
		$alumno = $this->getIdAlumno();
		$data = Padre::where('alumno_id', $alumno->id)->get();
		return View::make('padres.index', compact('data'));
	}

	public function create()
	{
		return View::make('padres.create');
	}

	public function store()
	{
		$padre = new Padre();
		$rules = [
		'nombres_p'	=> 'required',
		'esta_vivo_p'	=> 'required',
		'nombres_m'	=> 'required',
		'esta_vivo_m'	=> 'required',
		'vives_con_tus_padres'	=> 'required',
		'numero_hermanos'	=> 'required',
		'que_lugar_ocupas_en_la_familia'	=> 'required',
		];

		if (Input::get('esta_vivo_p') == 'si') {
			$rules['telefono_p'] = 'required';
			$rules['edad_p'] = 'required';
			$rules['ocupacion_p'] = 'required';
			$rules['escolaridad_p'] = 'required';
			$rules['horario_laboral_p'] = 'required';
			$padre->telefono_p =Input::get('telefono_p');
			$padre->edad_p =Input::get('edad_p');
			$padre->ocupacion_p =Input::get('ocupacion_p');
			$padre->escolaridad_p =Input::get('escolaridad_p');
			$padre->horario_laboral_p =Input::get('horario_laboral_p');

		}
		else{
			$padre->telefono_p = "";
			$padre->edad_p = "";
			$padre->ocupacion_p = "";
			$padre->escolaridad_p = "";
			$padre->horario_laboral_p = "";
		}
		if (Input::get('esta_vivo_m') == 'si') {

			$rules['telefono_m'] = 'required';
			$rules['edad_m'] = 'required';
			$rules['ocupacion_m'] = 'required';
			$rules['escolaridad_m'] = 'required';
			$rules['horario_laboral_m'] = 'required';
			$padre->telefono_m =Input::get('telefono_m');
			$padre->edad_m =Input::get('edad_m');
			$padre->ocupacion_m =Input::get('ocupacion_m');
			$padre->escolaridad_m =Input::get('escolaridad_m');
			$padre->horario_laboral_m =Input::get('horario_laboral_m');	
		}
		else{
			$padre->telefono_m ="";
			$padre->edad_m ="";	
			$padre->ocupacion_m ="";
			$padre->escolaridad_m ="";
			$padre->horario_laboral_m ="";		
		}
		if (Input::get('vives_con_tus_padres') == 'si') {
			$padre->con_quien_vives = "";
		}
		else{
			$padre->con_quien_vives =Input::get('con_quien_vives');
		}

		$validator = Validator::make(Input::except('_token'), $rules);

		if ($validator->fails()) {
			$messages = $validator->messages();
			//k($messages);
			return Redirect::back()->withInput()->withErrors($validator);
		}

		
		$padre->nombres_p =Input::get('nombres_p');
		$padre->esta_vivo_p =Input::get('esta_vivo_p');
		
		$padre->nombres_m =Input::get('nombres_m');
		$padre->esta_vivo_m =Input::get('esta_vivo_m');
		
		$padre->vives_con_tus_padres =Input::get('vives_con_tus_padres');
		
		$padre->numero_hermanos =Input::get('numero_hermanos');
		$padre->que_lugar_ocupas_en_la_familia =Input::get('que_lugar_ocupas_en_la_familia');
		$padre->alumno_id = $this->getIdAlumno()->id;
		$padre->save();
		//k($rules);
		return Redirect::route('padres');
	}

	public function edit()
	{
		$alumno = $this->getIdAlumno();
		$data = Padre::where('alumno_id', $alumno->id)->first();
		return View::make('padres.edit', compact('data'));
	}

	public function update($id)
	{
		$padre = Padre::find($id);

		$rules = [
		'nombres_p'	=> 'required',
		'esta_vivo_p'	=> 'required',
		'nombres_m'	=> 'required',
		'esta_vivo_m'	=> 'required',
		'vives_con_tus_padres'	=> 'required',
		'numero_hermanos'	=> 'required',
		'que_lugar_ocupas_en_la_familia'	=> 'required',
		];

		if (Input::get('esta_vivo_p') == 'si') {
			$rules['telefono_p'] = 'required';
			$rules['edad_p'] = 'required';
			$rules['ocupacion_p'] = 'required';
			$rules['escolaridad_p'] = 'required';
			$rules['horario_laboral_p'] = 'required';
			$padre->telefono_p =Input::get('telefono_p');
			$padre->edad_p =Input::get('edad_p');
			$padre->ocupacion_p =Input::get('ocupacion_p');
			$padre->escolaridad_p =Input::get('escolaridad_p');
			$padre->horario_laboral_p =Input::get('horario_laboral_p');

		}
		else{
			$padre->telefono_p = "";
			$padre->edad_p = "";
			$padre->ocupacion_p = "";
			$padre->escolaridad_p = "";
			$padre->horario_laboral_p = "";
		}
		if (Input::get('esta_vivo_m') == 'si') {

			$rules['telefono_m'] = 'required';
			$rules['edad_m'] = 'required';
			$rules['ocupacion_m'] = 'required';
			$rules['escolaridad_m'] = 'required';
			$rules['horario_laboral_m'] = 'required';
			$padre->telefono_m =Input::get('telefono_m');
			$padre->edad_m =Input::get('edad_m');
			$padre->ocupacion_m =Input::get('ocupacion_m');
			$padre->escolaridad_m =Input::get('escolaridad_m');
			$padre->horario_laboral_m =Input::get('horario_laboral_m');	
		}
		else{
			$padre->telefono_m ="";
			$padre->edad_m ="";	
			$padre->ocupacion_m ="";
			$padre->escolaridad_m ="";
			$padre->horario_laboral_m ="";		
		}
		if (Input::get('vives_con_tus_padres') == 'si') {
			$padre->con_quien_vives = "";
		}
		else{
			$padre->con_quien_vives =Input::get('con_quien_vives');
		}

		$validator = Validator::make(Input::except('_token'), $rules);

		if ($validator->fails()) {
			$messages = $validator->messages();
			return Redirect::back()->withInput()->withErrors($validator);
		}

		
		$padre->nombres_p =Input::get('nombres_p');
		$padre->esta_vivo_p =Input::get('esta_vivo_p');
		
		$padre->nombres_m =Input::get('nombres_m');
		$padre->esta_vivo_m =Input::get('esta_vivo_m');
		
		$padre->vives_con_tus_padres =Input::get('vives_con_tus_padres');
		
		$padre->numero_hermanos =Input::get('numero_hermanos');
		$padre->que_lugar_ocupas_en_la_familia =Input::get('que_lugar_ocupas_en_la_familia');
		$padre->save();

		return Redirect::route('padres');
	}

	public function getIdUser()
	{
		return Auth::user()->id;
	}

	public function getIdAlumno()
	{
		return Alumno::where('usuario_id', $this->getIdUser())->first();
	}

}