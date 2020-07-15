<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('site.home');
Route::view('/contactus', 'contactus')->name('site.contactus');
Route::get('/dashboard', 'PostController@show')->name('site.posts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
