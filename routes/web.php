<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index']);

Route::post('/contact-submit', [PortfolioController::class, 'store'])->name('contact.store');

/*
Route::get('/', function () {
    return view('single');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/skills', function () {
    return view('pages.skills');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/projects', function () {
    return view('pages.projects');
});
*/