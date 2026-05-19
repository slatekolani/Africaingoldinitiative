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

    Route::get('/', [homeController::class, 'app'])->name('home');
    Route::get('/aboutUs', [homeController::class, 'app'])->name('aboutUs');
    Route::get('/programs', [homeController::class, 'app'])->name('programs');
    Route::get('/team', [homeController::class, 'app'])->name('team');
    Route::get('/impact', [homeController::class, 'app'])->name('impact');
    Route::get('/gallery', [homeController::class, 'app'])->name('gallery');
    Route::get('/contactUs', [homeController::class, 'app'])->name('contactUs');
    Route::post('/contact', [ContactController::class, 'send'])->name('contact.submit');
});
