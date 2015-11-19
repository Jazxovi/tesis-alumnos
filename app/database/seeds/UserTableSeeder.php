<?php

class UserTableSeeder extends Seeder {

	public function run()
	{

		User::create([
			'username'  => 'user',
            'email'     => 'user@admin.com',
            'password' => Hash::make('cbtis251') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
		]);

		User::create([
			'username'  => 'admin',
            'email'     => 'admin@admin.com',
            'password' => Hash::make('alfredocbtis') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
		]);
	}

}