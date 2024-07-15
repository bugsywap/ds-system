<?php

// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;


Route::get('/ds/index', [CrudController::class, 'index'])->name('index');
Route::get('/ds/pl', [CrudController::class, 'pl'])->name('patient_list');
Route::get('/ds/calendar', [CrudController::class, 'calendar'])->name('calendar');
Route::get('/ds/vg', [CrudController::class, 'vg'])->name('visual_gallery');
Route::get('/ds/apt', [CrudController::class, 'apt'])->name('appointments');
//ADD
Route::get('/ds/add_patient', [CrudController::class, 'add_patient'])->name('add_patient');
Route::post('/ds/addPatient', [CrudController::class, 'store'])->name('addPatient');

//READ
Route::get('/ds/patients/{id}', [CrudController::class, 'patient_info'])->name('patient_info');

//EDIT
Route::get('/ds/edit_patient{id}', [CrudController::class, 'edit_patient'])->name('edit_patient');
Route::post('/ds/editPatient', [CrudController::class, 'edit'])->name('editPatient');

//DELETE

Route::get('/', function () {
    return view('welcome');
});
