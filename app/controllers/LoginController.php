<?php

class LoginController extends \BaseController {

	public function home()
	{
		// Verificamos que el usuario no esté autenticado
        if (Auth::check())
        {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return Redirect::to('/registro');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
		return View::make('login.login');
	}

	public function postLogin()
	{
		// Guardamos en un arreglo los datos del usuario.
        $userdata = array(
            'usuario' => Input::get('usuario'),
            'password'=> Input::get('password')
        );
        // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
        if(Auth::attempt($userdata, Input::get('remember-me', 0)))
        {
            // De ser datos válidos nos mandara a la bienvenida
            return Redirect::to('/registro');
        }
        // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
        return Redirect::to('login');
	}

	public function logout()
	{
		return View::make('login.logout');
	}

	public function terminado()
	{
		Auth::logout();
        return Redirect::to('/');
	}


}