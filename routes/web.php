<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/inven', function () {
    return view('inven');
});
Route::get('/inven/peminjaman', function () {
    return view('peminjaman');
});

Route::get('/praktikum/assistant', [UserController::class, 'assistant']);
Route::get('/praktikum', [UserController::class, 'praktikan']);
