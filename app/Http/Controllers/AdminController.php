<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function showDashboard()
    {
        return view('admin-dashboard');
    }

    public function sendEmail(Request $request)
    {
        $email = session('user_email');
        if (!$email) {
            return redirect('/admin-dashboard')->with('error', 'Email belum dimasukkan.');
        }
        // Kirim email menggunakan Gmail SMTP
        Mail::raw('Ini adalah email dari admin.', function ($message) use ($email) {
            $message->to($email)
                    ->subject('Email dari Admin');
        });
        return redirect('/admin-dashboard')->with('success', 'Email berhasil dikirim!');
    }
}
