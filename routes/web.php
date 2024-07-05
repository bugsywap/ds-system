<?php

// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;


Route::get('/ds/index', [CrudController::class, 'index'])->name('index');
Route::get('/ds/pl', [CrudController::class, 'pl'])->name('patient_list');
Route::get('/ds/add_patient', [CrudController::class, 'add_patient'])->name('add_patient');
Route::post('/ds/addPatient', [CrudController::class, 'store'])->name('addPatient');


Route::get('/', function () {
    return view('welcome');
});
