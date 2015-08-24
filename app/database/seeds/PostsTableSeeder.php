<?php
use Faker/Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run() {

		$faker = Faker::create('en_En');

		Post::turncate();

		for ($i = 0; $i < 10; i++)
		{
			$post = new Post();
			$post->title = $faker->realText(50, 2);
			$post->body = $faker->realText(500, 2);
			$post->save();
		}		
		
	}
}