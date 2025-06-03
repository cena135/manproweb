<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create staff user
        User::create([
            'name' => 'John Staff',
            'email' => 'staff@john.petra.ac.id',
            'password' => Hash::make('staffpassword'),
            'role' => 'staff',
        ]);

        // Create student user
        User::create([
            'name' => 'Jane Student',
            'email' => 'student@john.petra.ac.id',
            'password' => Hash::make('studentpassword'),
            'role' => 'student',
        ]);

        // User::create([
        //     'name' => 'Admin Staff',
        //     'email' => 'admin.staff@john.petra.ac.id',
        //     'password' => Hash::make('adminpassword'),
        //     'role' => 'staff-admin',
        // ]);
    }
}
