<?php

use Illuminate\Database\Seeder;
use AlienStream\Domain\Implementation\Models\Community;
use AlienStream\Domain\Implementation\Models\Genre;
use AlienStream\Domain\Implementation\Models\Source;

class CommunityTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$dubstep_community = Community::create([
			'id' => 1,
			'name' => 'Dubstep',
			'thumbnail' => 'http://cdn.marketplaceimages.windowsphone.com/v8/images/169b34cf-ddfa-4f59-81ba-991dc4a0bf38?imageType=ws_icon_large',
			'description' => 'This is where the dubstep lives',
			'favorite_count' => 0,
			'play_count' => 0,
		]);

		$dubstep_genre = Genre::query()->where('name', '=', 'dubstep')->first();
		$dubstep_community->genres()->attach($dubstep_genre->id);

		$electronic_genre = Genre::query()->where('name', '=', 'electronic')->first();
		$dubstep_community->genres()->attach($electronic_genre->id);

		$dubstep_source = Source::find(1);
		$dubstep_community->sources()->attach($dubstep_source->id);
	}

}
