<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/patient', [PatientController::class, 'index'])->name('patient.index');
Route::get('/patient/show', [PatientController::class, 'show'])->name('patient.show');
Route::get('/patient/create', [PatientController::class, 'create'])->name('patient.create');