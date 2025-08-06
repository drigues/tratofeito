<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'welcome');
Route::view('/terms', 'terms');
Route::view('/privacy-policy', 'privacy-policy');
Route::view('/cookies', 'cookies');

Route::view('/receba-orcamentos', 'landing.orcamentos')->name('landing.orcamentos');
Route::view('/receba-projetos', 'landing.projetos')->name('landing.projetos');

Route::get('/test', fn () => view('test'));
