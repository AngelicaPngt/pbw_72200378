<?php

use Illuminate\Database\Seeder;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');

        for($i=1; $i<=99; $i++){
        DB::table('mahasiswa')->insert([
            'nim' => $faker->unique()->numberBetween(72200379, 72200580),
            'nama' => $faker->name(),
            'gender' => $faker->randomElement(['wanita', 'pria']),
            'jurusan' => $faker->randomElement(['Sistem Informasi', 'Teknik Informatika']),
            'bidang_minat' => $faker->randomElement(['Olahraga', 'Kesenian'])
            ]);
        }
    }
}

