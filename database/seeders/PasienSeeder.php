<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i < 2000; $i++) { 
            DB::table('pasien')->insert([
                'NamaPasien'=> $faker->name,
                'JenisKelamin' => $faker->numberBetween(1, 2),
                'Alamat' => $faker->address,
                'StatusPasien' => $faker->numberBetween(1, 6),
                'Agama' => $faker->numberBetween(1, 6),
                // 'TanggalLahir' => $faker->date('d-m-Y'),
                // 'TanggalPemeriksaan' => $faker->date('d-m-Y'),

            ]);
        }
    }
}
