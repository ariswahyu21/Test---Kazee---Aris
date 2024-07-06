<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  // Tambahkan ini
use Illuminate\Support\Facades\Hash;  // Tambahkan ini

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Tambahkan data admin ke dalam tabel users
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
