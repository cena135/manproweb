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

    public function teacherIndex()
    {
        $schedules = Schedule::paginate(10); // You can apply filters here if needed
        return view('staff-jadwal-ujian', compact('schedules'));
    }

    public function adminIndex()
    {
        $schedules = Schedule::paginate(10); // You can apply filters here if needed
        return view('admin-req', compact('schedules'));
    }

}
