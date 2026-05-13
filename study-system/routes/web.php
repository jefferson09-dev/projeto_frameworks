<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\StudyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/subjects', [SubjectController::class, 'index']);

Route::get('/subjects/create', [SubjectController::class, 'create']);

Route::post('/subjects', [SubjectController::class, 'store']);

Route::get('/subjects/{id}/edit', [SubjectController::class, 'edit']);

Route::put('/subjects/{id}', [SubjectController::class, 'update']);

Route::delete('/subjects/{id}', [SubjectController::class, 'destroy']);

Route::get('/studies', [StudyController::class, 'index']);

Route::get('/studies/create', [StudyController::class, 'create']);

Route::post('/studies', [StudyController::class, 'store']);

Route::put('/studies/{id}/finish', [StudyController::class, 'finish']);

Route::get('/dashboard', [StudyController::class, 'dashboard']);

Route::get('/dashboard', [StudyController::class, 'dashboard']);

Route::get('/dashboard', [StudyController::class, 'dashboard']);