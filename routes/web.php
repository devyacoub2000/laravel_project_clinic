<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::get('/', [HomeController::class, 'index']);

Route::get('redirect', [HomeController::class, 'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// HomeController Make Appointment

Route::post('make_appaintment', [HomeController::class, 'make_appaintment']);
Route::get('my_appointment',    [HomeController::class, 'my_appointment']);
Route::get('cancel_appointment/{id}',    [HomeController::class, 'cancel_appointment']);


// Admin Controller Route , Functions 

Route::get('add_doctor', [AdminController::class, 'add_doctor']);
Route::post('post_doctor', [AdminController::class, 'post_doctor']);
Route::get('all_doctors', [AdminController::class, 'all_doctors']);
Route::get('updateddd_doctor/{id}', [AdminController::class, 'edit_doctor']);
Route::post('updateeedoc/{id}', [AdminController::class, 'updateeedoc']);
Route::get('remove_doctor/{id}', [AdminController::class, 'remove_doctor']);


// view appointments 

Route::get('view_appointment',     [AdminController::class,   'view_appointment']);

Route::get('approved/{id}', [AdminController::class, 'approved']);
Route::get('remove_appoint/{id}', [AdminController::class, 'remove_appoint']);

// Add Doctor Times 

Route::get('add_doctor_time',      [AdminController::class, 'add_doctor_time']);
Route::post('post_doctor_time',    [AdminController::class, 'post_doctor_time']);
Route::get('view_doctor_time',     [AdminController::class, 'view_doctor_time']);
Route::get('delete_doctor_time/{id}',   [AdminController::class, 'delete_doctor_time']);

// View Patient Data

Route::get('view_patient_data', [AdminController::class, 'view_patient_data']);

// add_clinic

Route::get('add_clinic',   [AdminController::class, 'add_clinic']);
Route::post('post_clinic', [AdminController::class, 'post_clinic']);
Route::get('view_clinic',   [AdminController::class, 'view_clinic']);
Route::get('delete_clinic/{id}',   [AdminController::class, 'delete_clinic']);

// ************// 





