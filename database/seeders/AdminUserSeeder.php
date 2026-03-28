<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Ensure an admin account exists for initial sign-in.
     */
    public function run(): void
    {
        $admin = User::updateOrCreate(
            ['email' => env('APE_ADMIN_EMAIL', 'admin@ape.test')],
            [
                'name' => env('APE_ADMIN_NAME', 'System Admin'),
                'password' => Hash::make(env('APE_ADMIN_PASSWORD', 'password')),
                'status' => 'active',
            ]
        );

        if (! $admin->hasRole('Admin')) {
            $admin->assignRole('Admin');
        }
    }
}
