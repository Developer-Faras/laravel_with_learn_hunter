<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route Get
Route::get('/', function () {
    return view('home');
});

// Route View
Route::view('/about', 'about');

// Route Any
Route::any('/services', function () {
    return view('services');
});


// Route Macth
Route::match(['get', 'post'], '/contact', function () {
    return view('contact');
});
