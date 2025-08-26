<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::view('/', 'welcome') ->name('welcome');

Route::view('/cookies', 'general.politica-cookies')->name('general.politica-cookies');
Route::view('/termos', 'general.politica-termos')->name('general.politica-termos');
Route::view('/privacidade', 'general.politica-privacidade')->name('general.politica-privacidade');

Route::view('/receba-orcamentos', 'landing.orcamentos')->name('landing.orcamentos');
Route::view('/receba-projetos', 'landing.projetos')->name('landing.projetos');

require __DIR__.'/auth.php';
