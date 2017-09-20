<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        App\User::truncate();
        foreach (range(1, 10) as $i) {
            User::create([
                    'name' => $faker->name,
                'email'=> $faker->email,
                'password'=> bcrypt('password'),
                'api_token'=> str_random(60),
                    ]);
        }
    }
}
