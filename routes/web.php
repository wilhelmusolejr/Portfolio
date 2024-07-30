<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;


Route::get('/', [ProjectController::class, 'index'])->name('home');
Route::get('/about', [ProjectController::class, 'about'])->name('about');

// Projects
Route::get('/project/{slug}', [ProjectController::class, 'showProject']);