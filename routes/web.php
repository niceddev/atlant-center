<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'language'], function() {

    Route::get('/', [
        \App\Http\Controllers\HomeController::class,
        'index'
    ]);

    Route::get('/change-lang/{lang}', [
        \App\Http\Controllers\HomeController::class,
        'changeLanguage'
    ])->name('change-lang');

});
