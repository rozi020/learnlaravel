<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Jurusan;
use Faker\Generator as Faker;

$factory->define(Jurusan::class, function (Faker $faker) {
	$faker->addProvider(new \Mmo\Faker\PicsumProvider($faker));
    return [
        'jurusan_mahasiswa' => $faker->randomElement(['HUKUM', 'INFORMATIKA','PERPAJAKAN','KEDOKTERAN','MINER'])
    ];
});

