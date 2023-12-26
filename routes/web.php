<?php

// Routes Khusus Landing Pages
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.app');
});


//admin
Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

});

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard');
});

// ARTIKEL
Route::resource('dashboard/artikel', DashboardArtikelController::class, [
    'names' => [
        'index' => 'artikel.index',
        // 'show' => 'artikel.show',
    ]
]);