<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mahasiswa;
use Faker\Generator as Faker;

$factory->define(Mahasiswa::class, function (Faker $faker) {
	$faker->addProvider(new \Mmo\Faker\PicsumProvider($faker));
    return [
        'nama' => $faker->name,
        'nim' => $faker->numberBetween(183140714111000,183140714111999),
        'image' => $faker->picsum('public/image',400, 400, false),
        'jurusan' => $faker->numberBetween(1,5)
    ];
});
