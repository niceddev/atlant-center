<?php

use App\Orchid\Screens\PlatformScreen;
use Illuminate\Support\Facades\Route;

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

//About
Route::screen('/about', \App\Orchid\Screens\About\IndexScreen::class)
    ->name('platform.about.index');

Route::screen('/about/edit', \App\Orchid\Screens\About\EditScreen::class)
    ->name('platform.about.edit');

