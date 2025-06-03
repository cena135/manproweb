<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;

class MyScheduleController extends Controller
{
    public function index()
    {
        $userId = Auth::id(); // Get the logged-in user ID
        // Eager load the 'pengawas' relationships using the user IDs in the 'pengawas' JSON column
        $schedules = Schedule::whereJsonContains('pengawas', $userId)
                             ->with('pengawas')  // Eager load the user for each pengawas
                             ->paginate(10);  // Paginate the result
        return view('jadwal-mengawas', compact('schedules'));
    }
}


