<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;


Route::get('/', [ProjectController::class, 'index'])->name('home');
Route::get('/about', [ProjectController::class, 'about'])->name('about');

// Projects
Route::get('/project/philippine-currency-identifier', [ProjectController::class, 'philippineCurrencyIdentifier']);
Route::get('/project/mobhie', [ProjectController::class, 'mobhie']);
Route::get('/project/pennywise', [ProjectController::class, 'pennywise']);
Route::get('/project/online-appointment-and-consultation-clinic', [ProjectController::class, 'onlineAppointmentAndConsultationClinic']);
Route::get('/project/dass-Depressioon-Level-Predictor', [ProjectController::class, 'dassDepressioonLevelPredictor']);