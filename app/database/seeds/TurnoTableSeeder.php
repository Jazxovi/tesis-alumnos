<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TurnoTableSeeder extends Seeder {

	public function run()
	{
		
		Turno::create([
			'turno' => 'matutino'
		]);

		Turno::create([
			'turno' => 'vespertino'

		]);
		
	}

}