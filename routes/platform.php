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

//Services
Route::screen('/services', \App\Orchid\Screens\Services\IndexScreen::class)
    ->name('platform.services.index');

Route::screen('/services/form', \App\Orchid\Screens\Services\CreateScreen::class)
    ->name('platform.services.create');

Route::screen('/services/form/{section}', \App\Orchid\Screens\Services\EditScreen::class)
    ->name('platform.services.edit');

//Doctors
Route::screen('/doctors', \App\Orchid\Screens\Doctors\IndexScreen::class)
    ->name('platform.doctors.index');

Route::screen('/doctors/form', \App\Orchid\Screens\Doctors\CreateScreen::class)
    ->name('platform.doctors.create');

Route::screen('/doctors/form/{section}', \App\Orchid\Screens\Doctors\EditScreen::class)
    ->name('platform.doctors.edit');

//Reviews
Route::screen('/reviews', \App\Orchid\Screens\Reviews\IndexScreen::class)
    ->name('platform.reviews.index');

Route::screen('/reviews/form', \App\Orchid\Screens\Reviews\CreateScreen::class)
    ->name('platform.reviews.create');

Route::screen('/reviews/form/{section}', \App\Orchid\Screens\Reviews\EditScreen::class)
    ->name('platform.reviews.edit');
