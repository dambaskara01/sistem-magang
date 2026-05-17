<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InternshipSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('internships')->insert([
            [
                'id_intern' => 1,
                'id_user' => 2,
                'perusahaan' => 'PT. AA',
                'posisi' => 'UI/UX Designer',
                'tanggal_mulai' => '31-05-2026',
                'tanggal_selesai' => '1-11-2026',
                'status' => 'diterima',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}