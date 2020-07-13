<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('site.home');
Route::view('/contactus', 'contactus')->name('site.contactus');
Route::get('/dashboard', 'PostController@show')->name('site.posts');
