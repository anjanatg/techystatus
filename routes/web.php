<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductivityController;
use App\Http\Controllers\AiController;
use App\Http\Controllers\DevelopmentController;
use App\Http\Controllers\PcAndMobileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/productivity', [ProductivityController::class, 'index'])->name('productivity');
Route::get('/ai', [AiController::class, 'index'])->name('ai');

Route::prefix('pc-and-mobile')->name('pcandmobile.')->group(function () {
    Route::get('/', [PcAndMobileController::class, 'index'])->name('index');
    Route::get('/android', [PcAndMobileController::class, 'android'])->name('android');
    Route::get('/ios', [PcAndMobileController::class, 'ios'])->name('ios');
    Route::get('/linux', [PcAndMobileController::class, 'linux'])->name('linux');
    Route::get('/windows', [PcAndMobileController::class, 'windows'])->name('windows');
});

Route::prefix('development')->name('development.')->group(function () {
    Route::get('/', [DevelopmentController::class, 'index'])->name('index');
    Route::get('/laravel', [DevelopmentController::class, 'laravel'])->name('laravel');
    Route::get('/microservices', [DevelopmentController::class, 'microservices'])->name('microservices');
});