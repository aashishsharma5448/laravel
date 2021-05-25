<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('tasks',App\Http\Controllers\Taskcontroller::class);
Route::resource('gallery',App\Http\Controllers\empgallery::class);
Route::resource('users',App\Http\Controllers\Usercontroller::class);
