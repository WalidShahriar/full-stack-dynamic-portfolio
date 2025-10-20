<?php

use Illuminate\Support\Facades\Route;

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