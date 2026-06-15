<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing')->name('home');
Route::view('/politica-de-privacidade', 'privacy')->name('privacy');

