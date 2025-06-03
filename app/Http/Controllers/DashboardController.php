<?php

// app/Http/Controllers/DashboardController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Staff Dashboard
    public function staff()
    {
        return view('staff-dashboard');  // Return view for staff dashboard
    }

    // Student Dashboard
    public function student()
    {
        return view('student-dashboard');  // Return view for student dashboard
    }

    public function staffAdmin()
    {
        return view('staff-admin-dashboard');  // Return view for student dashboard
    }
}
