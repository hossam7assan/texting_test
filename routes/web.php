<?php

use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TimeZoneController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/get-timezones/{country}', [TimeZoneController::class , 'getTimezones'])->name('get-timezones');

Route::post('subscribe/{plan}' , [SubscriptionController::class , 'subscribe'])->name('subscribe.store');
Route::get('/checkout/success', [SubscriptionController::class, 'success'])->name('subscribe.success');
Route::get('/checkout/cancel', [SubscriptionController::class, 'cancel'])->name('subscribe.cancel');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('plans' , [PlanController::class , 'index'])->name('plans.index');

});

require __DIR__.'/auth.php';
