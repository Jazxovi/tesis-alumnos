<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AreaTableSeeder extends Seeder {

	public function run()
	{
		
			Area::create([
				'area' => 'Tecnico en Logistica'

			]);

			Area::create([
				'area' => 'Tecnico y Soporte y Mantenimiento en Equipo de Computo'

			]);
		
	}

}