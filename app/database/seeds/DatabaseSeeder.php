<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('GrupoTableSeeder');
		$this->call('TurnoTableSeeder');
		$this->call('SemestreTableSeeder');
		$this->call('AreaTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('MaestroTableSeeder');
	}

}
