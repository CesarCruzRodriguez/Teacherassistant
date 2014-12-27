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

		$this->call('TeacherTableSeeder');
		$this->command->info('Teachers table seeded!');

		$this->call('ProfesorsTableSeeder');
		$this->command->info('Profesors table seeded!');
	}

}

