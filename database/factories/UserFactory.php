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
        'uuid' => Str::uuid(),
        'name' => 'Abdoul Rahim',
        'poste' => 'Tech Lead & Fullstack Developer',
        'email' => 'rahim.bah@gmail.com',
        'phone_number' => '0768110232',
        'password' => Hash::make('password'),
        'email_verified_at' => now(),
        'remember_token' => Str::random(10),
    ];
});
