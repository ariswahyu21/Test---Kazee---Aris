<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Employee;

class SeederForEmployees extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID'); // Gunakan Faker untuk data yang di-generate secara acak

        for ($i = 0; $i < 50; $i++) {
            Employee::create([
                'nomor_induk' => $faker->unique()->numerify('##########'),
                'nama_karyawan' => $faker->name,
                'no_ktp' => $faker->unique()->numerify('###############'),
                'alamat' => $faker->address,
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date($format = 'Y-m-d', $max = '2006-12-12'),
                'no_telepon' => $faker->unique()->numerify('08##########'),
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'agama' => $faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Budha', 'Katholik', 'Konghuchu']),
                'status_pernikahan' => $faker->randomElement(['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati']),
                'jenjang_pendidikan' => $faker->randomElement(['SD', 'SMP', 'SMA/SMK', 'D3/D4', 'S1', 'S2', 'S3']),
                'tahun_lulus' => $faker->numberBetween($min = 1960, $max = 2006),
                'tahun_bergabung' => $faker->numberBetween($min = 1960, $max = 2022),
                'lama_bekerja' => $faker->numberBetween($min = 1, $max = 480), // Menggunakan jumlah bulan sebagai lama bekerja
                'status_karyawan' => $faker->randomElement(['Tetap', 'Kontrak', 'Magang']),
                'department_id' => $faker->numberBetween($min = 1, $max = 2), // Ubah sesuai dengan jumlah departemen yang ada di database
            ]);
        }
    }
}
