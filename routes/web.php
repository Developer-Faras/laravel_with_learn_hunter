<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\example\FirstController;


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

// Route Redirect
Route::redirect('/redirect', '/contact');

// Route With Another Folder Views
Route::view('/another', 'layout.another');

// Route With Parametars
Route::get('/users/{id}', function ($id) {
    return "<h1>Passed Parameter Id Is: $id </h1> <a href='".url('/')."'>Back To Home</a>";
});

// Named Route
Route::get('/thisIsNameRoute', function () {
    return view('layout.name');
})->name('name');

// Named Route With Parametars
Route::get('/user/{id}', function ($id) {
    return view('layout.name');
})->name('namedid');

// Encripted Route
Route::get(md5('encripted'), function () {
    return view('layout.encripted');
})->name('encripted');



// Route For Middleware
Route::get('/country', function () {
    return view('layout.country');
})->name('country')->middleware('country');

// Route For Token Check
Route::get('/token', function () {
    $token = csrf_token();

    dd($token);
})->name('token');



// Route With Controller
Route::get('/controller', [FirstController::class, 'index'])->name('controller');
