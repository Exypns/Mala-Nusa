<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::view('/about', 'pages.about')->name('about');

Route::view('/explore', 'pages.explore')->name('explore');

Route::view('/impact', 'pages.impact')->name('impact');

Route::view('/contact', 'pages.contact')->name('contact');