<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

// Guest routes for admin (register & login)
Route::prefix('admin')->middleware('guest:admin')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('admin.register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [LoginController::class, 'create'])->name('admin.login');
    Route::post('login', [LoginController::class, 'store']);
});

// Authenticated admin routes (dashboard, overview, award, violation)
Route::prefix('admin')->middleware('auth:admin')->group(function () {
    // Dashboard route
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Additional routes for admin pages
    Route::get('overview', [DashboardController::class, 'overview'])->name('admin.overview');
    Route::get('award', [DashboardController::class, 'award'])->name('admin.award');
    Route::get('violation', [DashboardController::class, 'violation'])->name('admin.violation');

    // Logout route
    Route::post('logout', [LoginController::class, 'destroy'])->name('admin.logout');
});
