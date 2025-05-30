<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\MyScheduleController;
use App\Http\Controllers\PengawasUjianController;

// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard routes with names
Route::get('/staff-dashboard', [DashboardController::class, 'staff'])
    ->middleware('auth')
    ->name('staff-dashboard');

Route::get('/student-dashboard', [DashboardController::class, 'student'])
    ->middleware('auth')
    ->name('student-dashboard');

// Optional home route
Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

// Optional welcome route
Route::get('/', function () {
    return view('welcome');
});

Route::get('/pengawas-ujian', function () {
    return view('pengawas-ujian');
})->name('pengawas-ujian')->middleware('auth');

Route::get('/cari-jadwal-mengawas', [ScheduleController::class, 'index'])
    ->name('cari-jadwal-mengawas')
    ->middleware('auth');

// routes/web.php
Route::get('/jadwal-mengawas', [MyScheduleController::class, 'index'])->name('jadwal-mengawas');


// routes/web.php
Route::post('/submit-form', [PengawasUjianController::class, 'submitForm'])->name('submit-form');

Route::get('/register-overseer', [App\Http\Controllers\OverseerRegistrationController::class, 'create'])->name('register-overseer');
Route::post('/register-overseer', [App\Http\Controllers\OverseerRegistrationController::class, 'store'])->name('register-overseer.store');

// Route::get('/jadwal-mengawas', [MyScheduleController::class, 'index'])->middleware('auth')->name('my-schedule');





