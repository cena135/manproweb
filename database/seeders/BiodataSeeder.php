<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Biodata;
use Illuminate\Database\Seeder;

class BiodataSeeder extends Seeder
{
    public function run(): void
    {
        // Find the user by email
        $user = User::where('email', 'student@john.petra.ac.id')->first(); // Change to a valid email

        if ($user) {
            // Create Biodata for the user
            Biodata::create([
                'student_number' => 'C14220033', // Example student number
                'name' => 'Jane Student',         // Example name
                'program' => 'Informatics',  // Example program
                'faculty' => 'Industrial Technology', // Example faculty
                'track' => 'Regular',             // Example track
                'user_id' => $user->id,      // Link biodata to user
            ]);
        }
    }
}
