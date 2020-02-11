<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Mahasiswa;
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

$factory->define(Mahasiswa::class, function (Faker $faker) {
	$faker->addProvider(new \Mmo\Faker\PicsumProvider($faker));
    return [
        'nama' => $faker->name,
        'nim' => $faker->numberBetween($min=183140714111000, $max=183140714111999),
        'image' => $faker->picsum('public/image',400, 400, false)
    ];
});
