<?php

use Illuminate\Database\Seeder;

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
        $faker = Faker\Factory::create('id_ID');

        for($i=1; $i <10; $i++) {
        	DB::table('mahasiswa')->insert([
        		'nama' => $faker->name,
        		'nim' => $faker->numberBetween(183140714111000,183140714111999)]);
        }
    }
}
