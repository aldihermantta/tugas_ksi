<?php

// Routes Khusus Landing Pages
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HomeController;


// Routes Khusus Dashboard
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Artikel_Dashboard\DashboardArtikelController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// KHUSUS LANDING PAGE
    // Route::get('/', function () {
    //     return view('layouts.app');
    // });

    Route::get('/', [HomeController::class, 'index'])->name('home-alun-alun');

    Route::resource('/infromasi-alun-alun', ArtikelController::class, [
        'names' => [
            'index' => 'halaman-informasi',
            'show' => 'detail-informasi'
        ]
    ]);


// KHUSUS DASHBOARD
    Route::prefix('auth')->group(function () {
        Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
        Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
        Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    });

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    // ARTIKEL DASHBOARD
    Route::resource('dashboard/artikel', DashboardArtikelController::class, [
        'names' => [
            'index' => 'artikel.index',
            'create' => 'artikel.create',
            'store' => 'artikel.store'
        ]
    ]);
