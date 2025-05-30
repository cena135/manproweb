<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OverseerRegistration;

class OverseerRegistrationController extends Controller
{
    public function create()
{
    return view('overseer.register');
}

public function store(Request $request)
{
    $request->validate([
        'reason' => 'required|string|max:500',
    ]);

    OverseerRegistration::create([
        'user_id' => auth()->id(),
        'status' => 'pending',
        'reason' => $request->reason,
    ]);

    return redirect()->route('/cari-jadwal-mengawas')->with('status', 'Pendaftaran berhasil. Menunggu persetujuan admin.');
}
}
