<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin User
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@shoppcie.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);

        // Seller User
        User::create([
            'name' => 'Seller Account',
            'email' => 'seller@shoppcie.com',
            'password' => Hash::make('password123'),
            'role' => 'seller',
            'email_verified_at' => now(),
        ]);

        // Regular Customer
        User::create([
            'name' => 'John Customer',
            'email' => 'customer@example.com',
            'password' => Hash::make('password123'),
            'role' => 'customer',
            'email_verified_at' => now(),
        ]);

        // Create 10 random customers
        User::factory()->count(10)->create([
            'role' => 'customer',
        ]);
    }
}
