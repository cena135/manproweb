<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengawasUjianController extends Controller
{
    /**
     * Show the form for Pengawas Ujian.
     *
     * @return \Illuminate\View\View
     */
    public function showForm()
    {
        // Return the view with necessary data (if needed)
        return view('pengawas-ujian');
    }

    /**
     * Handle the form submission for Pengawas Ujian.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitForm(Request $request)
    {
        // Validate the form input
        $validated = $request->validate([
            'nomor_ktp' => 'required|string',
            'nomor_rekening' => 'required|string',
            'atas_nama_rekening' => 'required|string',
            'bank_rekening' => 'required|string',
            'cabang_rekening' => 'required|string',
        ]);

        // Example: You can store the data in a database or perform other actions
        // Example of saving to the database (assuming you have a PengawasUjian model)
        // PengawasUjian::create([
        //     'user_id' => Auth::id(),
        //     'nomor_ktp' => $validated['nomor_ktp'],
        //     'nomor_rekening' => $validated['nomor_rekening'],
        //     'atas_nama_rekening' => $validated['atas_nama_rekening'],
        //     'bank_rekening' => $validated['bank_rekening'],
        //     'cabang_rekening' => $validated['cabang_rekening'],
        // ]);

        // You can store the data in session, database, or any other process
        // For now, let's assume the form data is stored successfully

        return redirect()->route('pengawas-ujian')->with('success', 'Form submitted successfully.');
    }
}
