<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmailController;
use App\Http\Controllers\AdminController;

Route::get('/', [EmailController::class, 'showForm']);
Route::post('/submit-email', [EmailController::class, 'submitEmail']);

Route::get('/admin-dashboard', [AdminController::class, 'showDashboard']);
Route::post('/send-email', [AdminController::class, 'sendEmail']);
