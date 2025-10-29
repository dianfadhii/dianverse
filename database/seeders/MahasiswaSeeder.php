<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'name' => "Gracie Abrams",
                'NIM' => "13242420047",
                'prodi' => "Teknologi Informasi",
                'email' => "gracieabrams13@gmail.com",
                'nohp' => "62897367290",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Dian Fadhilah",
                'NIM' => "13242420048",
                'prodi' => "Sistem Informasi",
                'email' => "dian@example.com",
                'nohp' => "6281234567890",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "John Doe",
                'NIM' => "13242420049",
                'prodi' => "Teknik Komputer",
                'email' => "john@example.com",
                'nohp' => "6281234567891",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
