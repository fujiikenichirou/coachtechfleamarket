<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerchandiseController;


Route::get('/', function () {
    return view('top');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});


Route::get('/sell', [MerchandiseController::class, 'create']);