<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Admin User
        |--------------------------------------------------------------------------
        */

        $admin = User::create([
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'user_type' => 'admin',
            'status' => 'active',
        ]);

        UserProfile::create([
            'user_id' => $admin->id,

            'first_name' => 'Admin',
            'last_name' => 'User',
            'display_name' => 'Admin User',

            'job_title' => 'System Administrator',
            'department' => 'Administration',

            'phone' => null,
            'bio' => 'WorkManagement administrator account.',

            'address_line_1' => null,
            'address_line_2' => null,
            'city' => null,
            'state' => null,
            'postal_code' => null,
            'country' => 'Bangladesh',

            'timezone' => 'Asia/Dhaka',
            'locale' => 'en',
            'date_format' => 'MMM D, YYYY',
            'theme' => 'light',
        ]);


        /*
        |--------------------------------------------------------------------------
        | Normal User
        |--------------------------------------------------------------------------
        */

        $user = User::create([
            'email' => 'user@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'user_type' => 'member',
            'status' => 'active',
        ]);

        UserProfile::create([
            'user_id' => $user->id,

            'first_name' => 'Test',
            'last_name' => 'User',
            'display_name' => 'Test User',

            'job_title' => 'Researcher',
            'department' => 'Research & Development',

            'phone' => null,
            'bio' => 'WorkManagement test user account.',

            'address_line_1' => null,
            'address_line_2' => null,
            'city' => null,
            'state' => null,
            'postal_code' => null,
            'country' => 'Bangladesh',

            'timezone' => 'Asia/Dhaka',
            'locale' => 'en',
            'date_format' => 'MMM D, YYYY',
            'theme' => 'light',
        ]);
    }
}
