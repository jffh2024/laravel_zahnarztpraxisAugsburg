<?php


use App\Http\Controllers\ContactController;

use Illuminate\Support\Facades\Route;





Route::prefix('de')->group(function () {
    Route::view('/index', 'de.index') -> name('index.de');
    Route::view('/anfahrt', 'de.anfahrt') -> name('anfahrt.de');
    Route::view('/datenschutz', 'de.datenschutz') -> name('datenschutz.de');;
    Route::view('/impressum', 'de.impressum')-> name('impressum.de');;
    Route::view('/karriere', 'de.karriere')-> name('karriere.de');;
    Route::view('/kontakt', 'de.kontakt')-> name('kontakt.de');;
    Route::view('/leistungen', 'de.leistungen')-> name('leistungen.de');;
    Route::view('/unser-team', 'de.unser-team') -> name('unser-team.de');
});

Route::prefix('en')->group(function () {
     Route::view('/index', 'en.index') -> name('index.en');
    Route::view('/anfahrt', 'en.anfahrt')  -> name('anfahrt.en');
    Route::view('/datenschutz', 'en.datenschutz')  -> name('datenschutz.en');
    Route::view('/impressum', 'en.impressum')  -> name('impressum.en');
    Route::view('/karriere', 'en.karriere')  -> name('karriere.en');
    Route::view('/kontakt', 'en.kontakt')  -> name('kontakt.en');
    Route::view('/leistungen', 'en.leistungen')  -> name('leistungen.en');
    Route::view('/unser-team', 'en.unser-team') -> name('unser-team');
});

// Startseite de/index
Route::redirect('/', '/de/index');

//Kontaktformular
Route::get('/kontakt', [ContactController::class, 'create'])->name('contact.create');
Route::post('/kontakt', [ContactController::class, 'store'])->name('contact.store');

