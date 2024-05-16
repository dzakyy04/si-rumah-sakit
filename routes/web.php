<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MedicineController;
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

Route::get('/', [FrontendController::class, 'index'])->name('home');

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
    Route::post('/dokter', [DoctorController::class, 'store'])->name('doctor.store');
    Route::get('/dokter/{id}', [DoctorController::class, 'getDoctor'])->name('doctor.get');
    Route::put('/dokter/{id}/edit', [DoctorController::class, 'update'])->name('doctor.update');
    Route::delete('/dokter/{id}/hapus', [DoctorController::class, 'destroy'])->name('doctor.destroy');

    // Janji Temu
    Route::get('/janji-temu', [AppointmentController::class, 'index'])->name('appointment.index');

    //Obat
    Route::get('/obat', [MedicineController::class, 'index'])->name('medicine.index');
    Route::post('/obat', [MedicineController::class, 'store'])->name('medicine.store');
    Route::get('/obat/{id}', [MedicineController::class, 'getMedicine'])->name('medicine.get');
    Route::put('/obat/{id}/edit', [MedicineController::class, 'update'])->name('medicine.update');
    Route::delete('/obat/{id}/hapus', [MedicineController::class, 'destroy'])->name('medicine.destroy');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.view');
    Route::post('/login', [AuthController::class, 'login'])->name('login');

});

Route::get('/dokter-spesialis', [DoctorController::class, 'getDoctorsBySpeciality'])->name('doctor.get.speciality');
Route::post('/janji-temu', [FrontendController::class, 'submitAppointment'])->name('appointment.submit');
Route::get('/janji-temu/{id}', [AppointmentController::class, 'getAppointment'])->name('appointment.get');
Route::put('/janji-temu/{appointment}/confirm', [AppointmentController::class, 'confirm'])->name('appointments.confirm');
Route::put('/janji-temu/{appointment}/reject', [AppointmentController::class, 'reject'])->name('appointments.reject');
Route::delete('/janji-temu/{id}/', [AppointmentController::class, 'destroy'])->name('appointment.destroy');

