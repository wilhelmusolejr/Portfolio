<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;


Route::get('/', [ProjectController::class, 'index'])->name('home');
Route::get('/about', [ProjectController::class, 'about'])->name('about');

// Projects
Route::get('/project/philippine-currency-identifier', [ProjectController::class, 'philippineCurrencyIdentifier'])->name('philippine-currency-identifier');
Route::get('/project/mobhie', [ProjectController::class, 'mobhie'])->name('mobhie');
Route::get('/project/pennywise', [ProjectController::class, 'pennywise'])->name('pennywise');
Route::get('/project/online-appointment-and-consultation-clinic', [ProjectController::class, 'onlineAppointmentAndConsultationClinic'])->name('online-appointment-and-consultation-clinic');