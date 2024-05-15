<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;

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

Route::get('/', function() {
    return view('frontend.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/patient', [PatientController::class, 'index'])->name('patient.index');
    Route::get('/patient/{id}/show', [PatientController::class, 'show'])->name('patient.show');
    Route::get('/patient/{id}/edit', [PatientController::class, 'edit'])->name('patient.edit');
    Route::get('/patient/create', [PatientController::class, 'create'])->name('patient.create');
    Route::post('/patient/store', [PatientController::class, 'store'])->name('patient.store');
    Route::put('/patient/{id}/update', [PatientController::class, 'update'])->name('patient.update');
    Route::get('/patient/{id}', [PatientController::class, 'getPatient'])->name('patient.get');
    Route::delete('/patient/{id}/delete', [PatientController::class, 'delete'])->name('patient.delete');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Dokter
    Route::get('/dokter', [DoctorController::class, 'index'])->name('doctor.index');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.view');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});