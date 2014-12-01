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
        Artisan::call('migrate:refresh');

		$this->call('UserSeeder');
        $this->call('ScheduleSeeder');
        $this->call('ActivitySeeder');
        $this->call('SportSeeder');
        $this->call('ClassSeeder');
	}

}
