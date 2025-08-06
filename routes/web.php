<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome') ->name('welcome');

Route::view('/cookies', 'general.cookies')->name('general.cookies');
Route::view('/termos', 'general.termos')->name('general.termos');
Route::view('/politica', 'general.politica')->name('general.politica');

Route::view('/receba-orcamentos', 'landing.orcamentos')->name('landing.orcamentos');
Route::view('/receba-projetos', 'landing.projetos')->name('landing.projetos');