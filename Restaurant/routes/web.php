<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\MenuController; // Import MenuController jika ada

// Route login dan logout
Route::get('/login', [LoginController::class, 'loginForm'])->name('login');

// Route untuk halaman menu
Route::get('/menu', function () {
    return view('index2'); // Pastikan file ini ada di resources/views
})->name('menu.index');


// Route untuk login
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route untuk halaman dashboard admin users
Route::post('/users-register', [SystemController::class, 'register'])->name('users.register');
Route::delete('/users/{id}', [SystemController::class, 'destroy'])->name('users.destroy');

// Route yang dilindungi dengan middleware 'auth'
Route::middleware('auth')->group(function () {
    Route::get('/dashboard-admin', [SystemController::class, 'admin'])->name('dashboard.admin');
    Route::get('/dashboard-cashier', [SystemController::class, 'cashier'])->name('dashboard.cashier');
    Route::get('/dashboard-owner', [SystemController::class, 'owner'])->name('dashboard.owner');
    Route::get('/dashboard-admin-users', [SystemController::class, 'users'])->name('dashboard.admin.users');
});
