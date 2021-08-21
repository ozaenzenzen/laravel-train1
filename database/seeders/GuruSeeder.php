<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i < 35; $i++) {
            // insert data ke table guru
            DB::table('guru')->insert(
                [
                    'nama' => $faker->name,
                    'umur' => $faker->numberBetween(20, 40),

                ]
            );
        }
    }
}
