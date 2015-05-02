<?php

use Illuminate\Database\Seeder;
use AlienStream\Domain\Implementation\Models\Source;

class SourceTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Source::create([
			'id' => 1,
			'title' => '/r/dubstep - The Home of Dubstep on Reddit',
			'description' => 'A place for sharing, finding, and discussing music in the Dubstep genre.',
			'type' => 'reddit/subreddit',
			'importance' => 100,
			'url' => 'http://www.reddit.com/r/dubstep',
			'thumbnail' => 'http://static.hdw.eweb4.com/media/wp_400/1/1/7873.jpg'
		]);

		/*
		Source::create([
			'id' => 2,
			'title' => 'Bassnectar',
			'description' => 'Bassnectar is one of the longest standing and most respected artists in American electronic dance music, commonly referred to simply as the EDM scene. He is the…',
			'type' => 'soundcloud/channel',
			'importance' => 100,
			'url' => 'https://soundcloud.com/bassnectar',
			'thumbnail' => 'http://thekollection.s3.amazonaws.com/dubstep/files/2011/08/bassnectar-divergent-spectrum-e1309394883551.jpeg'
		]);

		Source::create([
			'id' => 3,
			'title' => 'BASSLIGHTS 2014',
			'description' => 'A sampler of tracks presenting our full lineup for BASSLIGHTS 2014. BASSNECTAR / PRETTY LIGHTS, BEATS ANTIQUE, CHROMEO (DJ SET), EXMAG, ELIOT LIPP',
			'type' => 'soundcloud/playlist',
			'importance' => 100,
			'url' => 'https://soundcloud.com/bassnectar/sets/basslights-2014',
			'thumbnail' => 'http://thekollection.s3.amazonaws.com/dubstep/files/2011/08/bassnectar-divergent-spectrum-e1309394883551.jpeg'
		]);
		*/

		/*
		Source::create([
			'id' => 4,
			'title' => 'Monstercat',
			'description' => 'The newest Electro / House / DnB / Glitch Hop / 110 BPM / Drumstep / Dubstep / Trance / Trap / Nudisco / Future Bass',
			'type' => 'youtube/channel',
			'importance' => 100,
			'url' => 'https://www.youtube.com/user/MonstercatMedia',
			'thumbnail' => 'https://yt3.ggpht.com/-ZeRv929WhoQ/AAAAAAAAAAI/AAAAAAAAAAA/VO36-n0hPqQ/s100-c-k-no/photo.jpg'
		]);

		Source::create([
			'id' => 5,
			'title' => 'Monstercat - Dubstep',
			'description' => 'The newest Electro / House / DnB / Glitch Hop / 110 BPM / Drumstep / Dubstep / Trance / Trap / Nudisco / Future Bass',
			'type' => 'youtube/playlist',
			'importance' => 100,
			'url' => 'https://www.youtube.com/watch?v=yiqznDG-uE0&list=PLF5C76212C58C464A',
			'thumbnail' => 'https://yt3.ggpht.com/-ZeRv929WhoQ/AAAAAAAAAAI/AAAAAAAAAAA/VO36-n0hPqQ/s100-c-k-no/photo.jpg'
		]);
		*/

		/*
		Source::create([
			'id' => 4,
			'title' => 'DailyDoseOfBass',
			'description' => 'Dubstep &amp; EDM Blog dedicated to providing the newest music, mixes &amp; videos on a daily basis. Our job is to keep you up to date. Have you had your fix yet?',
			'type' => 'blog/rss',
			'importance' => 100,
			'url' => 'http://dailydoseofbass.com/feed',
			'thumbnail' => 'http://static.hdw.eweb4.com/media/wp_400/1/1/7873.jpg'
		]);
		*/
	}

}
