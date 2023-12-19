<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'full_name' => 'User2',
            'email' => 'user2@gmail.com',
            'nim' => 1002,
            'role' => 'mahasiswa',
            'date_of_birth' => now(),
            'major' => 'Sistem Informasi',
            'password' => Hash::make('password'),
            // Tambahkan kolom lain sesuai kebutuhan Anda
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

