<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('index');
});

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('/admin', function () {
    return view('admin.index');
})->middleware('auth');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class,'login'])->name('admin.login');
Route::post('/logout',[AuthController::class,'logout'])->name('admin.logout');
