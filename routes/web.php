<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\homeController;

Route::middleware('web')->group(function () {
    Route::get('/lang/{lang}', function ($lang) {
        if (in_array($lang, ['en', 'sw'])) {
            session(['locale' => $lang]);
        }
        return redirect()->back();
    })->name('lang.switch');

    Route::get('/', [homeController::class, 'home'])->name('home');
    Route::get('/aboutUs', [homeController::class, 'aboutUs'])->name('aboutUs');
    Route::get('/programs', [homeController::class, 'programs'])->name('programs');
    Route::get('/team', [homeController::class, 'team'])->name('team');
    Route::get('/impact', [homeController::class, 'impact'])->name('impact');
    Route::get('/gallery', [homeController::class, 'gallery'])->name('gallery');
    Route::get('/contactUs', [homeController::class, 'contactUs'])->name('contactUs');
    Route::post('/contact', [ContactController::class, 'send'])->name('contact.submit');
});
