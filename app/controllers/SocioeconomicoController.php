<?php

class SocioeconomicoController extends \BaseController {

	public function index()
	{
		$padre =Padre::where('alumno_id', $this->getInfoAlumno()->first()->id)->first();
		$data = Socioeconomico::where('alumno_id', $this->getInfoAlumno()->first()->id)->get();
		return View::make('socioeconomicos.index', compact('padre', 'data'));
	}

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

	
	public function update($id)
	{
		$data = Padre::find($id);
		if (Input::get('lugar_trabajo_p')!=null) {
			$data->lugar_trabajo_p = Input::get('lugar_trabajo_p');
			$data->ingreso_mensual_p = Input::get('ingreso_mensual_p');
		}
		if (Input::get('lugar_trabajo_m')!=null){
			$data->lugar_trabajo_m = Input::get('lugar_trabajo_m');
			$data->ingreso_mensual_m = Input::get('ingreso_mensual_m');	
		}
		
		$data->save();
		return Redirect::back();
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