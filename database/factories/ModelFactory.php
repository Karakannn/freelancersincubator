<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'linkedin_url' => $faker->linkedin_url,
        'facebook_url' => $faker->facebook_url,
        'twitter_url' => $faker->twitter_url,
        'phone' => $faker->phone,
        'presentation' => $faker->presentation,
        'remember_token' => str_random(10),
    ];
});
