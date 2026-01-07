<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Startseite auf Listings gesetzt
Route::get('/', [ListingController::class, 'index'])->name('Startseite'); 

Route::middleware(['auth'])->group(function () {
 
    Route::get('/listings/create', [ListingController::class, 'create'])->name('listings.create');
 
    Route::post('/listings', [ListingController::class, 'store'])->name('listings.store');
 
    Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->name('listings.edit');
 
    Route::put('/listings/{listing}', [ListingController::class, 'update'])->name('listings.update');
 
    Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->name('listings.destroy');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password');
 
});

Route::post('/listings/{id}/favorite', [ListingController::class, 'toggleFavorite'])
    ->middleware('auth')
    ->name('listings.favorite');

Route::post('/listings/{listing}/images', [ListingController::class, 'updateImages'])
    ->middleware('auth')->name('listings.images.update');

Route::delete('/listings/images/{image}', [ListingController::class, 'deleteImage'])
    ->middleware('auth')->name('listings.images.delete');

// Detailansicht für Listings
Route::get('/listings/{listing}', [ListingController::class, 'show'])->name('listings.show');

require __DIR__.'/auth.php';
