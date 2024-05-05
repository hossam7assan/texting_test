<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        $faker = \Faker\Factory::create();

        return [
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'phone' => $faker->phoneNumber,
            'email' => $faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'timezones_id' => \App\Models\Timezone::inRandomOrder()->first()->id,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
