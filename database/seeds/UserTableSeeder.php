<?php

use Illuminate\Database\Seeder;
use AlienStream\Domain\Implementation\Models\User;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::create([
			'id' => 1,
			'name' => 'Alien Admin',
			'email' => 'mtbucci@gmail.com',
			'password' => Hash::make(str_random(10)),
		]);

		User::create([
			'id' => 2,
			'name' => 'Test User',
			'email' => 'buccim2@gene.com',
			'password' => Hash::make(str_random(10)),
		]);
	}

}
