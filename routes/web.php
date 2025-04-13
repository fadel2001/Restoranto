<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\DashboardController;
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

// Theme Route
Route::controller(ThemeController::class)->name('theme.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/service', 'service')->name('service');
    Route::get('/menu', 'menu')->name('menu');
    Route::get('/booking', 'booking')->name('booking');
    Route::get('/team', 'team')->name('team');
    Route::get('/testimonial', 'testimonial')->name('testimonial');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/about', 'about')->name('about');
});

// Booking Route
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');

// Conttact Route
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

// Route::get('/dashboard', function () {
//     return view('layouts.dashboard');
// });


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

// Route::get('dasboard', function () {
//     return view('layouts.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
