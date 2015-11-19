<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class MaestroTableSeeder extends Seeder {

	public function run()
	{
		Maestro::create([

			'password'=>'cbtis',
			'username'=>'usuario',
			'email'=>'ejemplo@gmail.com'

		]);
		
	}

}