<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AppointmentController;

Route::resource('clients', ClientController::class);
Route::resource('appointments', AppointmentController::class);