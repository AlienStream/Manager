<?php

use Illuminate\Database\Seeder;
use AlienStream\Domain\Implementation\Models\Genre;

class GenreTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Genre::create([
			'id' => 1,
			'name' => 'dubstep',
		]);

		Genre::create([
			'id' => 2,
			'name' => 'electronic',
		]);

		Genre::create([
			'id' => 3,
			'name' => 'pop',
		]);

		Genre::create([
			'id' => 4,
			'name' => 'indie',
		]);

		Genre::create([
			'id' => 5,
			'name' => 'rock',
		]);

		Genre::create([
			'id' => 6,
			'name' => 'metal',
		]);

		Genre::create([
			'id' => 7,
			'name' => 'hiphop',
		]);

		Genre::create([
			'id' => 8,
			'name' => 'rap',
		]);

		Genre::create([
			'id' => 9,
			'name' => 'jazz',
		]);

		Genre::create([
			'id' => 10,
			'name' => 'classical',
		]);


	}

}
