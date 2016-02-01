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

	Route::post('/datos_escolares', ['as' => 'registro.store', 'uses' => 'HomeController@store' ]);

	Route::put('/datos_escolares/{id}', ['as' => 'registro.update', 'uses' => 'HomeController@update' ]);

	/*
	|-------------------------------------------------------------------------
	| Rutas de datos del alumno
	|_________________________________________________________________________
	|*/
	Route::get('registro/datos_del_alumno', ['as'=> 'alumno', 'uses' => 'AlumnoController@index']);
	
	Route::post('registro/datos_del_alumno', ['as'=> 'alumno.post', 'uses' => 'LoginController@create']);

	/*
	|--------------------------------------------------------------------------
	| Rutas del registro Antecedentes
	|--------------------------------------------------------------------------
	|
	*/

	Route::get('/registro/antecedentes', ['as' => 'antecedentes', 'uses' => 'AntecedenteController@index' ]);

	Route::post('/registro/antecedentes', ['as' => 'antecedentes.post', 'uses' => 'AntecedenteController@store' ]);

	/*
	|--------------------------------------------------------------------------
	| Rutas del registro Datos generales de los Padres
	|--------------------------------------------------------------------------
	|
	*/

	Route::get('/registro/padres', ['as' => 'padres', 'uses' => 'PadresController@index' ]);

	Route::post('/registro/padres', ['as' => 'padres.post', 'uses' => 'PadresController@store' ]);

	/*
	|--------------------------------------------------------------------------
	| Rutas del registro Aspectos Alimenticios
	|--------------------------------------------------------------------------
	|
	*/

	Route::get('/registro/alimenticios', ['as' => 'alimentacion', 'uses' => 'ComidaController@index' ]);

	Route::post('/registro/alimenticios', ['as' => 'alimentacion.post', 'uses' => 'ComidaController@store' ]);

	/*
	|--------------------------------------------------------------------------
	| Rutas del registro Aspectos Familiares
	|--------------------------------------------------------------------------
	|
	*/
	Route::get('/registro/familiares', ['as' => 'familiares', 'uses' => 'FamiliaController@index' ]);

	Route::post('/registro/familiares', ['as' => 'familiares.post', 'uses' => 'FamiliaController@store' ]);

	Route::post('/registro/familiares', ['as' => 'logout', 'uses' => 'FamiliaController@store' ]);

	/*
	|--------------------------------------------------------------------------
	| Rutas del registro Socioeconomico
	|--------------------------------------------------------------------------
	|
	*/
	Route::get('/registro/socioeconomico', ['as' => 'socioeconomico', 'uses' => 'SocioeconomicoController@index' ]);

	Route::post('/registro/socioeconomico', ['as' => 'socioeconomico.post', 'uses' => 'SocioeconomicoController@store' ]);

	Route::post('/registro/socioeconomico/{id}', ['as' => 'socioeconomico.destroy', 'uses' => 'SocioeconomicoController@destroy' ]);

	Route::get('/registro/economico', ['as' => 'economico', 'uses' => 'EconomicoController@index' ]);

	Route::post('/registro/economico', ['as' => 'economico.post', 'uses' => 'EconomicoController@store' ]);
	/*
	|--------------------------------------------------------------------------
	| Ruta para cerrar la Sesion
	|--------------------------------------------------------------------------
	|
	*/

	Route::get('/registro/fin', ['as' => 'fin', 'uses' => 'LoginController@logout' ]);
	
	Route::get('/logout', ['as' => 'salir', 'uses' => 'LoginController@terminado' ]);
