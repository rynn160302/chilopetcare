<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('product/{product}', [ProductController::class, 'show'])->name('product.show');
    Route::post('booking/{product:id}', [ProductController::class, 'order'])->name('booking.create');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('', function () {
            return view('admin.index');
        })->name('index');
        Route::resource('product', ProductController::class);
        Route::resource('booking', BookingController::class);
        Route::resource('payment', PaymentController::class);
        Route::resource('user', UserController::class);
        Route::resource('bank', BankController::class);
    });
});

require __DIR__ . '/auth.php';
