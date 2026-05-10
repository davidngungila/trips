<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::updateOrCreate(
            ['email' => 'admin@tanzaniatrips.com'],
            [
                'name' => 'Admin User',
                'email' => 'admin@tanzaniatrips.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]
        );
        
        // Assign admin role to the user
        if (!$user->hasRole('System Administrator')) {
            $user->assignRole('System Administrator');
        }
    }
}
