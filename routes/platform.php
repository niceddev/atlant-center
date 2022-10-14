<?php

use App\Orchid\Screens\PlatformScreen;
use Illuminate\Support\Facades\Route;

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

//About
Route::screen('/about', \App\Orchid\Screens\About\IndexScreen::class)
    ->name('platform.about.index');

Route::screen('/about/form/{section}', \App\Orchid\Screens\About\EditScreen::class)
    ->name('platform.about.edit');

//Directions
Route::screen('/directions', \App\Orchid\Screens\Directions\IndexScreen::class)
    ->name('platform.directions.index');

Route::screen('/directions/form', \App\Orchid\Screens\Directions\CreateScreen::class)
    ->name('platform.directions.create');

Route::screen('/directions/form/{section}', \App\Orchid\Screens\Directions\EditScreen::class)
    ->name('platform.directions.edit');

