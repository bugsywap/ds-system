<?php

// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;


Route::get('/ds/index', [CrudController::class, 'index'])->name('index');
Route::get('/ds/pl', [CrudController::class, 'pl'])->name('patient_list');
Route::get('/ds/calendar', [CrudController::class, 'calendar'])->name('calendar');
Route::get('/ds/vg', [CrudController::class, 'vg'])->name('visual_gallery');
Route::get('/ds/apt', [CrudController::class, 'apt'])->name('appointments');
Route::get('/ds/add_patient', [CrudController::class, 'add_patient'])->name('add_patient');
Route::post('/ds/addPatient', [CrudController::class, 'store'])->name('addPatient');
Route::get('/ds/patients/{id}', [CrudController::class, 'patient_info'])->name('patient_info');


Route::get('/', function () {
    return view('welcome');
});
