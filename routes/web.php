<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('admin', function () {
    return view('admin.index');
})->middleware('auth');
