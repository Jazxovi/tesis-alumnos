<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SemestreTableSeeder extends Seeder {

	public function run()
	{
		
		Semestre::create([
			'semestre' => '1'
		]);

		Semestre::create([
			'semestre' => '2'
		]);

		Semestre::create([
			'semestre' => '3'
		]);

		Semestre::create([
			'semestre' => '4'
		]);

		Semestre::create([
			'semestre' => '5'
		]);

		Semestre::create([
			'semestre' => '6'
		]);


	}

}