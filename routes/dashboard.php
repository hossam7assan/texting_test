<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;

Route::group([
    'controller' => AuthController::class,
    'as' => 'login.',
    'prefix' => 'login',
    'middleware' => [
        'guest:admin'
    ],
], function () {
    Route::get('/', 'loginForm')->name('form');
    Route::post('/', 'login')->name('auth');
});

Route::group([
    'middleware' => [
        'auth:admin'
    ],
], function () {
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');
});
