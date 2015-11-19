<?php

/*
|--------------------------------------------------------------------------
| Rutas Login
|--------------------------------------------------------------------------
|
*/

Route::get('/', ['as' => 'login', 'uses' => 'LoginController@home' ]);

Route::get('/login', ['as' => 'login', 'uses' => 'LoginController@home' ]);

Route::post('/login', ['as' => 'login', 'uses' => 'LoginController@postLogin' ]);

Route::group(array('before' => 'auth'), function()
{

	/*
	|--------------------------------------------------------------------------
	| Rutas del registro Inicial
	|--------------------------------------------------------------------------
	|
	*/

	Route::get('/registro', ['as' => 'p', 'uses' => 'HomeController@home' ]);

	Route::post('/registro', ['as' => 'registro.store', 'uses' => 'HomeController@store' ]);

	Route::put('/registro/{id}', ['as' => 'registro.update', 'uses' => 'HomeController@update' ]);

	/*
	|--------------------------------------------------------------------------
	| Rutas del registro Antecedentes
	|--------------------------------------------------------------------------
	|
	*/

	Route::get('/registro/{id}/antecedentes', ['as' => 'antecedentes', 'uses' => 'AntecedenteController@index' ]);

	Route::post('/registro/{id}/antecedentes', ['as' => 'antecedentes.post', 'uses' => 'AntecedenteController@store' ]);

	/*
	|--------------------------------------------------------------------------
	| Rutas del registro Datyos generales de los Padres
	|--------------------------------------------------------------------------
	|
	*/

	Route::get('/registro/{id}/padres', ['as' => 'padres', 'uses' => 'PadresController@index' ]);

	Route::post('/registro/{id}/padres', ['as' => 'padres.post', 'uses' => 'PadresController@store' ]);

	/*
	|--------------------------------------------------------------------------
	| Rutas del registro Aspectos Alimenticios
	|--------------------------------------------------------------------------
	|
	*/

	Route::get('/registro/{id}/alimenticios', ['as' => 'alimentacion', 'uses' => 'ComidaController@index' ]);

	Route::post('/registro/{id}/alimenticios', ['as' => 'alimentacion.post', 'uses' => 'ComidaController@store' ]);

	/*
	|--------------------------------------------------------------------------
	| Rutas del registro Aspectos Familiares
	|--------------------------------------------------------------------------
	|
	*/
	Route::get('/registro/{id}/familiares', ['as' => 'familiares', 'uses' => 'FamiliaController@index' ]);

	Route::post('/registro/{id}/familiares', ['as' => 'familiares.post', 'uses' => 'FamiliaController@store' ]);

	Route::post('/registro/{id}/familiares', ['as' => 'logout', 'uses' => 'FamiliaController@store' ]);

	/*
	|--------------------------------------------------------------------------
	| Rutas del registro Socioeconomico
	|--------------------------------------------------------------------------
	|
	*/
	Route::get('/registro/{id}/socioeconomico', ['as' => 'socioeconomico', 'uses' => 'SocioeconomicoController@index' ]);

	Route::post('/registro/{id}/socioeconomico', ['as' => 'socioeconomico.post', 'uses' => 'SocioeconomicoController@store' ]);

	Route::post('/registro/socioeconomico/{id}', ['as' => 'socioeconomico.destroy', 'uses' => 'SocioeconomicoController@destroy' ]);

	Route::get('/registro/{id}/economico', ['as' => 'economico', 'uses' => 'EconomicoController@index' ]);

	Route::post('/registro/{id}/economico', ['as' => 'economico.post', 'uses' => 'EconomicoController@store' ]);
	/*
	|--------------------------------------------------------------------------
	| Ruta para cerrar la Sesion
	|--------------------------------------------------------------------------
	|
	*/

	Route::get('/registro/fin', ['as' => 'fin', 'uses' => 'LoginController@logout' ]);
	
	Route::get('/logout', ['as' => 'login', 'uses' => 'LoginController@terminado' ]);

});
