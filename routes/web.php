<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('bookings', BookingController::class);
    Route::get('/about', function () {
        return view('about');
    });
    Route::get('/promo', function () {
        return view('promo');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/bookings', [AdminController::class, 'index']);
        Route::get('/bookings/search', [AdminController::class, 'search'])->name('booking.search');
        // Route::get('/bookings/{booking}', [AdminController::class, 'show'])->name('bookings.show');
        Route::put('/bookings/{booking}', [AdminController::class, 'update'])->name('booking.update');
    });
});

require __DIR__ . '/auth.php';
