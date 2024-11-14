<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'pageTitle' => 'Home Page',
        'message' => 'Welcome to the Home Page!',
    ]);
})->name('home');

Route::get('/contacts', function () {
    return view('contacts', [
        'pageTitle' => 'Contacts Page',
        'message' => 'Get in touch with us!',
    ]);
})->name('contacts');

Route::get('/custom', function () {
    return view('custom', [
        'pageTitle' => 'Custom Page',
        'message' => 'This is a custom page for you!',
    ]);
})->name('custom');

