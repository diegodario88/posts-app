<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'))->name('site.home');
Route::get('/dashboard', fn () => view('posts'))->name('site.posts');
Route::get('/contactus', fn () => view('contactus'))->name('site.contactus');
