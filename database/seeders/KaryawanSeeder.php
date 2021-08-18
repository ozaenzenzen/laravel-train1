<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 40; $i++) {
            // insert data ke table pegawai
            DB::table('karyawan')->insert([
                'nama' => $faker->name,
                'alamat' => $faker->address,
            ]);
        }
    }
}
