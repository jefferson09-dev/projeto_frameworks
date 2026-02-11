<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return "Olá Laravel!";
});

Route::get('/home', [HomeController::class, 'index']);
