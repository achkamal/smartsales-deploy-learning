<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(), // langsung verified
            'password' => Hash::make('password123'), // password aman
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'User Biasa',
            'email' => 'user@gmail.com',
            'email_verified_at' => null, // belum verifikasi
            'password' => Hash::make('password123'),
            'remember_token' => Str::random(10),
        ]);
    }
}