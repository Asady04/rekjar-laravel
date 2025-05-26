<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Penting: import DB Facade
use Illuminate\Support\Facades\Hash; // Penting: import Hash Facade

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contoh 1: Memasukkan satu data secara langsung
        DB::table('users')->insert([
            'name' => 'Admin Utama',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Selalu hash password!
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Contoh 2: Memasukkan beberapa data dalam loop
        for ($i = 1; $i <= 5; $i++) {
            DB::table('users')->insert([
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@example.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Contoh 3: Menggunakan Factory (Sangat direkomendasikan untuk data dummy yang banyak)
        // Pastikan Anda sudah membuat UserFactory: php artisan make:factory UserFactory
        // \App\Models\User::factory(10)->create(); // Membuat 10 user menggunakan factory
    }
}