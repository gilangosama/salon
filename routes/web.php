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
Route::get('/about', function () {
    return view('about');
});
Route::get('/promo', function () {
    return view('promo');
});
Route::get('/services', function () {
    return view('services');
});

Route::middleware('auth')->group(function () {
    Route::resource('bookings', BookingController::class);


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/bookings', [AdminController::class, 'index']);
        Route::get('/bookings/search', [AdminController::class, 'search'])->name('booking.search');
        Route::put('/bookings/{booking}/approved', [AdminController::class, 'approved'])->name('booking.approved');
        Route::put('/bookings/{booking}/done', [AdminController::class, 'done'])->name('booking.done');
        Route::put('/bookings/{booking}/rejected', [AdminController::class, 'rejected'])->name('booking.rejected');
    });
});

require __DIR__ . '/auth.php';
