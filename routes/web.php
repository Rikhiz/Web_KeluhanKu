<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Foundation\Application;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\GuruBKController;
use App\Http\Controllers\SiswaController;

Route::redirect('/','dashboard');
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::middleware(['auth', 'verified'])->group (function () {
    Route::get('/dashboard', fn() => Inertia::render('Dashboard'))->name('dashboard');
    Route::resource('project', ProjectController::class);
    Route::resource('task', TaskController::class);
    Route::resource('user', UserController::class);
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'role:gurubk'])->group(function () {
    Route::prefix('gurubk')->group(function () {
        Route::get('/dashboard', [GuruBKController::class, 'index'])->name('gurubk.dashboard');
        // Route lainnya untuk Guru BK
    });
});

// Middleware untuk role 'siswa'
Route::middleware(CheckRole::class.':siswa')->group(function () {
    Route::prefix('siswa')->group(function () {
        Route::get('/dashboard', [SiswaController::class, 'index'])->name('siswa.dashboard');
        // Route lainnya untuk Siswa
    });
});
require __DIR__.'/auth.php';
