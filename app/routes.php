	<?php

Route::get('/', ['as' => 'sesion', 'uses'=> 'LoginController@login' ]);

Route::post('/login', ['as' => 'login.post', 'uses'=> 'LoginController@postLogin']);

	/*
	|--------------------------------------------------------------------------
	| Rutas del registro Inicial
	|--------------------------------------------------------------------------
	|
	*/

	Route::get('/datos_escolares', ['as' => 'p', 'uses' => 'HomeController@home' ]);

	Route::get('/datos_escolares/edit', ['as' => 'datos.escolares.edit', 'uses' => 'HomeController@edit' ]);

	Route::put('/datos_escolares/update/{id}', ['as' => 'datos.escolares.update', 'uses' => 'HomeController@update' ]);

	Route::post('/datos_escolares', ['as' => 'registro.store', 'uses' => 'HomeController@store' ]);

	/*
	|-------------------------------------------------------------------------
	| Rutas de datos del alumno
	|_________________________________________________________________________
	|*/
	Route::get('registro/datos_del_alumno', ['as'=> 'alumno', 'uses' => 'AlumnoController@index']);

	Route::get('registro/editar/datos_del_alumno', ['as'=> 'alumno.edit', 'uses' => 'AlumnoController@edit']);	

	Route::put('registro/datos_del_alumno', ['as'=> 'alumno.update', 'uses' => 'AlumnoController@update']);
	
	Route::post('registro/datos_del_alumno', ['as'=> 'alumno.post', 'uses' => 'LoginController@create']);

	/*
	|--------------------------------------------------------------------------
	| Rutas del registro Antecedentes
	|--------------------------------------------------------------------------
	|
	*/

	Route::get('/registro/antecedentes', ['as' => 'antecedentes', 'uses' => 'AntecedenteController@index' ]);

	Route::get('/registro/crear/antecedentes', ['as' => 'antecedentes.create', 'uses' => 'AntecedenteController@create' ]);

	Route::get('/registro/editar/antecedentes', ['as' => 'antecedentes.edit', 'uses' => 'AntecedenteController@edit' ]);

	Route::put('/registro/actualizar/antecedentes/{id}', ['as' => 'antecedentes.update', 'uses' => 'AntecedenteController@update' ]);

	Route::post('/registro/antecedentes', ['as' => 'antecedentes.store', 'uses' => 'AntecedenteController@store' ]);

	/*
	|--------------------------------------------------------------------------
	| Rutas del registro Datos generales de los Padres
	|--------------------------------------------------------------------------
	|
	*/

	Route::get('/registro/padres', ['as' => 'padres', 'uses' => 'PadresController@index']);

	Route::get('/registro/crear/padres', ['as' => 'padres.create', 'uses' => 'PadresController@create']);

	Route::get('/registro/editar/padres', ['as' => 'padres.edit', 'uses' => 'PadresController@edit']);

	Route::put('/registro/actualizar/padres/{id}', ['as' => 'padres.update', 'uses' => 'PadresController@update']);

	Route::post('/registro/padres', ['as' => 'padres.post', 'uses' => 'PadresController@store' ]);

	/*
	|--------------------------------------------------------------------------
	| Rutas del registro Aspectos Alimenticios
	|--------------------------------------------------------------------------
	|
	*/

	Route::get('/registro/alimenticios', ['as' => 'alimentacion', 'uses' => 'ComidaController@index' ]);

	Route::get('/registro/crear-alimenticios', ['as' => 'alimentacion.create', 'uses' => 'ComidaController@create' ]);

	Route::get('/registro/actualizar-alimenticios', ['as' => 'alimentacion.edit', 'uses' => 'ComidaController@edit' ]);

	Route::put('/registro/actualizar-alimenticios/{id}', ['as' => 'alimentacion.update', 'uses' => 'ComidaController@update' ]);

	Route::post('/registro/alimenticios', ['as' => 'alimentacion.post', 'uses' => 'ComidaController@store' ]);

	/*
	|--------------------------------------------------------------------------
	| Rutas del registro Aspectos Familiares
	|--------------------------------------------------------------------------
	|
	*/
	Route::get('/registro/aspectos-familiares', ['as' => 'familiares', 'uses' => 'FamiliaController@index' ]);

	Route::get('/registro/crear/aspectos-familiares', ['as' => 'familiares.create', 'uses' => 'FamiliaController@create' ]);

	Route::get('/registro/editar/aspectos-familiares', ['as' => 'familiares.edit', 'uses' => 'FamiliaController@edit' ]);

	Route::put('/registro/editar/aspectos-familiares', ['as' => 'familiares.update', 'uses' => 'FamiliaController@update' ]);

	Route::post('/registro/familiares', ['as' => 'familiares.post', 'uses' => 'FamiliaController@store' ]);


	/*
	|--------------------------------------------------------------------------
	| Rutas del registro Socioeconomico
	|--------------------------------------------------------------------------
	|
	*/
	Route::get('/registro/socioeconomico', ['as' => 'socioeconomico', 'uses' => 'SocioeconomicoController@index' ]);

	Route::post('/registro/socioeconomico', ['as' => 'socioeconomico.post', 'uses' => 'SocioeconomicoController@store' ]);

	Route::post('/registro/socioeconomico/{id}', ['as' => 'socioeconomico.destroy', 'uses' => 'SocioeconomicoController@destroy' ]);

	Route::put('/registro/editar/socioeconomico/{id}', ['as' => 'socioeconomico.update', 'uses' => 'SocioeconomicoController@update']);

	/*Route::get('/registro/economico', ['as' => 'economico', 'uses' => 'EconomicoController@index']);

	Route::post('/registro/economico', ['as' => 'economico.post', 'uses' => 'EconomicoController@store' ]);*/
	/*
	|--------------------------------------------------------------------------
	| Ruta para cerrar la Sesion
	|--------------------------------------------------------------------------
	|
	*/

	Route::get('/registro/fin', ['as' => 'fin', 'uses' => 'LoginController@logout' ]);
	
	Route::get('/logout', ['as' => 'salir', 'uses' => 'LoginController@terminado' ]);
