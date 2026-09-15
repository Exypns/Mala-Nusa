<?php

use App\Http\Controllers\ContactSubmissionController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/about', 'pages.about')->name('about');

Route::get('/explore', [ExperienceController::class, 'index'])
    ->name('explore');

Route::get('/explore/{experience:slug}', [ExperienceController::class, 'show'])
    ->name('explore.show');

Route::view('/impact', 'pages.impact')->name('impact');

Route::view('/contact', 'pages.contact')->name('contact');

Route::post('/contact', [ContactSubmissionController::class, 'store'])->name('contact.store');