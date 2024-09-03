<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('users', UserController::class);
