<?php

use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run() {

		$faker = Faker::create('en_En');

		for ($i = 0; $i < 10; $i++)
		{
			$post = new Post();
			$post->title = $faker->catchPhrase;
			$post->body = $faker->realText;
			$post->user_id = User::all()->random(1)->id;
			$post->save();
		}		
		
	}
}