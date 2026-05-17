<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->delete();
        DB::table('internships')->delete();
        DB::table('documents')->delete();
        
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            InternshipSeeder::class,
            DocumentSeeder::class,
        ]);
    }
}