<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/services/cat-grooming', function () {
    return view('services.cat-grooming');
});

Route::get('/services/cat-adoption', function () {
    return view('services.cat-adoption');
});

Route::get('/services/cat-hotel', function () {
    return view('services.cat-hotel');
});

Route::get('/services/cat-playroom', function () {
    return view('services.cat-playroom');
});

Route::get('/services/vet-consultation', function () {
    return view('services.vet-consultation');
});

Route::get('/services/cat-birthday-party', function () {
    return view('services.cat-birthday-party');
});