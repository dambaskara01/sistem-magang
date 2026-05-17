<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('documents')->insert([
            [
                'id_doc' => 1,
                'id_intern' => 1,
                'file' => 'https://dbdiagram.io/d',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}