<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AlumnoTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Alumno::create([
				/*'nombres'			=> $faker->name(),
				'fecha_nacimiento'	=> $faker->date($format = 'Y-m-d', $max = 'now'),
				'sexo'				=> $faker->randomElement($array = array ('Femenino','Masculino')),
				'direccion'			=> $faker->secondaryAddress,
				'colonia'			=> $faker->cityPrefix,
				'municipio'			=> $faker->citySuffix,
				'estado'			=> $faker->state,
				'mail'				=> $faker->freeEmail,
				'estado_civil'		=> $faker->randomElement($array = array ('Casado','Soltero')),
				'edad'				=> '19',
				'cp'				=> $faker->postcode,
				'telefono'			=> 1111111111*/
				'nombres'			=> $faker->name(),
				'fecha_nacimiento'	=> $faker->date($format = 'Y-m-d', $max = 'now'),
				'sexo'				=> $faker->randomElement($array = array ('Femenino','Masculino')),
				'direccion'			=> $faker->secondaryAddress,
				'colonia'			=> $faker->cityPrefix,
				'municipio'			=> $faker->citySuffix,
				'estado'			=> $faker->state,
				'mail'				=> $faker->freeEmail,
				'estado_civil'		=> $faker->randomElement($array = array ('Casado','Soltero')),
				'edad'				=> 18,
				'cp'				=> $faker->postcode,
				'telefono'			=> 2949441234
			]);
		}
	}

}
