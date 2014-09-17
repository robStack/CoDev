<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			$user = User::create([
				'username' => $faker->userName,
				'password' => \Hash::make('123456'),
				'email' => $faker->safeEmail,
				'type' => $faker->randomElement(['Leader','Integrant','Client'])
			]);

			UsersProfile::create([
				'user_id' => $user->id,
				'fullname' => $faker->name,
				'website' => $faker->url,
				'about' => $faker->text(200)
			]);
		}
	}

}