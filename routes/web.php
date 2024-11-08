<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\DashboardController;

Route::get('/hotel', [HotelController::class, 'index']);
Route::get('/food', [FoodController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/', function () {
    return view('navbar.index');
})->name('home');

Route::resource('foods', FoodController::class);
Route::resource('hotels', HotelController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

