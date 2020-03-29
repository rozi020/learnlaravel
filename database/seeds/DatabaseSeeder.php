<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(JurusanSeeder::class);
        $this->call(MhsSeeder::class);
        $this->call(UserSeeder::class);
    }
}
