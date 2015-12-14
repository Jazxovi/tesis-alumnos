<?php

class LoginController extends \BaseController {

	public function login()
	{
		// Verificamos que el usuario no esté autenticado
        if (Auth::check())
        {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return Redirect::route('p');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        $grupos = Grupo::where("status", "=", 1)->get();
		return View::make('login.login', compact('grupos'));
	}

    public function create()
    {
        $data = Input::except('_token');

        $rules = [ 
            'usuario'  => 'required | unique:users,usuario',
            'password'  => 'required',
            'nombres'   => 'required',
            'edad'  => 'required',
            'fecha_nacimiento'  => 'required',
            'sexo' => 'required',
            'cp' => 'required',
            'municipio' => 'required',
            'direccion' => 'required',
            'colonia' => 'required',
            'estado' => 'required',
            'telefono' => 'required',
            'mail' => 'required',
            'estado_civil' => 'required',
            'grupo_id'  => 'required',
        ];
        $validator = Validator::make( $data, $rules);

        if ($validator->passes()) {
            $user = new User();
            $user->usuario      = Input::get('usuario');
            $user->password     = Hash::make(Input::get('password'));
            $user->tipo         = "alumno";
            $user->save();
            
            $alumno                 = new Alumno();
            $alumno->nombres        = Input::get('nombres');
            $alumno->edad           = Input::get('edad');
            $alumno->fecha_nacimiento        = Input::get('fecha_nacimiento');
            $alumno->sexo           = Input::get('sexo');
            $alumno->cp             = Input::get('cp');
            $alumno->municipio      = Input::get('municipio');
            $alumno->direccion      = Input::get('direccion');
            $alumno->colonia        = Input::get('colonia');
            $alumno->estado         = Input::get('estado');
            $alumno->telefono       = Input::get('telefono');
            $alumno->mail           = Input::get('mail');
            $alumno->estado_civil   = Input::get('estado_civil');
            $alumno->grupo_id        = Input::get('grupo_id');
            $alumno->usuario_id     = $user->id;
            $alumno->save();
            
            return $this->postLogin();
        }

        return Redirect::back();
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
            return Redirect::route('p');
        }
        // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
        return Redirect::route('sesion');
	}

	public function logout()
	{
		return View::make('login.logout');
	}

	public function terminado()
	{
		Auth::logout();
        return Redirect::route('sesion');
	}


}