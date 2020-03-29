<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;
use Faker\Factory as Faker;

class MhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // for($i=1; $i <10; $i++) {
        // 	DB::table('mahasiswa')->insert([
        // 		'nama' => $faker->name,
        // 		'nim' => $faker->numberBetween(183140714111000,183140714111999),
        //         'image' => $faker->image('public/image', 640, 480, 'cats')]);
        // }

        Factory(App\Mahasiswa::class,5)->create();
    }
}
