<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::paginate(10); // Fix: use pagination
        return view('cari-jadwal-mengawas', compact('schedules'));
    }
}
