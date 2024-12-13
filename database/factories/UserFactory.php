<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'phone_number' => $faker->phoneNumber,
        'username' => $faker->userName,
        'access' => $faker->randomElement(['read', 'write']),
        'seal' => Str::random(10),
        'token' => Str::random(64),
        'seal_token' => Str::random(10),
        'role' => $faker->randomElement(['admin', 'user', 'blocked']),
        'email' => $faker->unique()->safeEmail,
        'password' => 'password',
    ];
});
