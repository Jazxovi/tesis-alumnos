<?php

class ComidaController extends \BaseController {

	public function index()
	{
		$data = $this->getComida();
		return View::make('alimentacion.index', compact('data'));
	}

	public function create()
	{
		return View::make('alimentacion.create');
	}

	public function store()
	{
		$comida = new Comida();
		$comida->alumno_id				= $this->getAlumno()->id;
		$comida->ya_consumiste_alimento	= Input::get('ya_consumiste_alimento');
		$comida->carne 					= Input::get('carne');
		$comida->pollo 					= Input::get('pollo');
		$comida->huevo					= Input::get('huevo');
		$comida->leche					= Input::get('leche');
		$comida->verduras				= Input::get('verduras');
		$comida->tortillas				= Input::get('tortillas');
		$comida->pan 					= Input::get('pan');
		$comida->refresco				= Input::get('refresco');
		$comida->save();

		return Redirect::route('alimentacion');
	}

	public function edit()
	{
		$data = $this->getComida();
		return View::make('alimentacion.edit', compact('data'));
	}

	public function update($id)
	{
		$comida = Comida::find($id);
		$comida->alumno_id				= $this->getAlumno()->id;
		$comida->ya_consumiste_alimento	= Input::get('ya_consumiste_alimento');
		$comida->carne 					= Input::get('carne');
		$comida->pollo 					= Input::get('pollo');
		$comida->huevo					= Input::get('huevo');
		$comida->leche					= Input::get('leche');
		$comida->verduras				= Input::get('verduras');
		$comida->tortillas				= Input::get('tortillas');
		$comida->pan 					= Input::get('pan');
		$comida->refresco				= Input::get('refresco');
		$comida->save();

		return Redirect::route('alimentacion');
	}

	public function getIdUser()
	{
		return Auth::user()->id;
	}

	public function getAlumno()
	{
		$alumno = Alumno::where('usuario_id', $this->getIdUser())->first();
		return $alumno;
	}

	public function getComida()
	{
		$alumno = Comida::where('alumno_id', $this->getAlumno()->id)->first();
		return $alumno;
	}

}