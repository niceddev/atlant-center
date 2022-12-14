<?php

use App\Orchid\Screens\PlatformScreen;
use Illuminate\Support\Facades\Route;

// Main
Route::screen('/main', \App\Orchid\Screens\Main\EditScreen::class)
    ->name('platform.main.edit');

//About
Route::screen('/about/form', \App\Orchid\Screens\About\EditScreen::class)
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

//Gallery
Route::screen('/gallery', \App\Orchid\Screens\Gallery\IndexScreen::class)
    ->name('platform.gallery.index');

Route::screen('/gallery/form', \App\Orchid\Screens\Gallery\CreateScreen::class)
    ->name('platform.gallery.create');

Route::screen('/gallery/{section}', \App\Orchid\Screens\Gallery\DestroyScreen::class)
    ->name('platform.gallery.destroy');

//Partners
Route::screen('/partners', \App\Orchid\Screens\Partners\IndexScreen::class)
    ->name('platform.partners.index');

Route::screen('/partners/form', \App\Orchid\Screens\Partners\CreateScreen::class)
    ->name('platform.partners.create');

Route::screen('/partners/form/{section}', \App\Orchid\Screens\Partners\EditScreen::class)
    ->name('platform.partners.edit');

//Contacts
Route::screen('/contacts/form', \App\Orchid\Screens\Contacts\EditScreen::class)
    ->name('platform.contacts.edit');

//Sections
Route::screen('/sections', \App\Orchid\Screens\Sections\IndexScreen::class)
    ->name('platform.sections.index');

Route::screen('/sections/form/{section}', \App\Orchid\Screens\Sections\EditScreen::class)
    ->name('platform.sections.edit');

//Email for consultation
Route::screen('/email-for-consultation/form', \App\Orchid\Screens\EmailForConsultation\EditScreen::class)
    ->name('platform.email_for_consultation.edit');
