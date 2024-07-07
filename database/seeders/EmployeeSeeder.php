<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 50; $i++) {
            DB::table('employees')->insert([
                'nomor_induk' => $faker->unique()->numberBetween(100000, 999999),
                'nama_karyawan' => $faker->name,
                'no_ktp' => $faker->unique()->numerify('################'),
                'alamat' => $faker->address,
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date($format = 'Y-m-d', $max = '2000-12-31'),
                'no_telepon' => $faker->phoneNumber,
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'agama' => $faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Budha', 'Katholik', 'Konghuchu']),
                'status_pernikahan' => $faker->randomElement(['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati']),
                'jenjang_pendidikan' => $faker->randomElement(['SD', 'SMP', 'SMA/SMK', 'D3/D4', 'S1', 'S2', 'S3']),
                'tahun_lulus' => $faker->year($max = '2020'),
                'tahun_bergabung' => $faker->year($max = '2023'),
                'lama_bekerja' => $faker->numberBetween(1, 240), // 1-240 months (20 years)
                'status_karyawan' => $faker->randomElement(['Tetap', 'Kontrak', 'Magang']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
