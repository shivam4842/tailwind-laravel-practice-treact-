<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('test', 'index')->name('index');
Route::view('about', 'about')->name('about');
Route::view('blog', 'blog')->name('blog');
Route::view('pricing', 'pricing')->name('pricing');
Route::view('contact-us', 'contactUs')->name('contact-us');
