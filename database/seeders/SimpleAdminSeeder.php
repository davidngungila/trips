<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class SimpleAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user without roles for now
        User::updateOrCreate(
            ['email' => 'admin@tanzaniatrips.com'],
            [
                'name' => 'Admin User',
                'email' => 'admin@tanzaniatrips.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]
        );
    }
}
