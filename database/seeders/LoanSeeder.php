<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Loan;
use Illuminate\Support\Facades\DB;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loan')->insert([
            'user_id' => 1,
            'lab' => 'Lab Integra 1',
            'date' => now(),
            'time_rent' => now(),
            'time_return' => now(),
            'status' => 'PENDING',
            'created_at' => now(),
            'booking_purpose' => 'Praktikum'

        ]);
    }
}
