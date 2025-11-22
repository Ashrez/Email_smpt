<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function showForm()
    {
        return view('input-email');
    }

    public function submitEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        // Simpan email ke database atau session, contoh:
        session(['user_email' => $request->email]);
        return redirect('/admin-dashboard')->with('success', 'Email berhasil disimpan!');
    }
}
