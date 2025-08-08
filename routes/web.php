<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome') ->name('welcome');

Route::view('/cookies', 'general.politica-cookies')->name('general.politica-cookies');
Route::view('/termos', 'general.politica-termos')->name('general.politica-termos');
Route::view('/privacidade', 'general.politica-privacidade')->name('general.politica-privacidade');

Route::view('/receba-orcamentos', 'landing.orcamentos')->name('landing.orcamentos');
Route::view('/receba-projetos', 'landing.projetos')->name('landing.projetos');