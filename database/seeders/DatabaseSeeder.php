<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder Anda di sini
        $this->call([
            UsersTableSeeder::class, // Contoh: memanggil UsersTableSeeder
            // OtherTableSeeder::class, // Jika Anda punya seeder lain
        ]);
    }
}