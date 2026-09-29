<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'index')->name('home');
Route::view('/news', 'news')->name('news');
Route::view('/productivity', 'productivity')->name('productivity');
Route::view('/ai', 'ai')->name('ai');


Route::prefix('pcandmobile')->name('pcandmobile.')->group(function () {
    Route::view('/', 'pcandmobile.index')->name('index');
    Route::view('/android', 'pcandmobile.android')->name('android');
    Route::view('/ios', 'pcandmobile.ios')->name('ios');
    Route::view('/linux', 'pcandmobile.linux')->name('linux');
    Route::view('/windows', 'pcandmobile.windows')->name('windows');
});


Route::prefix('development')->name('development.')->group(function () {
    Route::view('/', 'development.index')->name('index');
    Route::view('/laravel', 'development.laravel')->name('laravel');
    Route::view('/microservices', 'development.microservices')->name('microservices');
});