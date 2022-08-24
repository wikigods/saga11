<?php

use App\Http\Controllers\LiceoController;
use App\Http\Controllers\anioescolarController;
use App\Http\Controllers\seccionController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\student_signatureController;
use App\Http\Controllers\signatureController;
use App\Http\Controllers\docenteController;
use App\Http\Controllers\docente_signatureController;
use App\Http\Controllers\crpController;
use App\Http\Controllers\student_crpController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/liceo',LiceoController::class);
Route::resource('/anioescolar',anioescolarController::class);
Route::resource('/seccion',seccionController::class);
Route::resource('/student',studentController::class);
Route::resource('/student',student_signatureController::class);
Route::resource('/signature',signatureController::class);
Route::resource('/docente',docenteController::class);
Route::resource('/docente_signature',docente_signatureController::class);
Route::resource('/crp',crpController::class);
Route::resource('/student_crp',student_crpController::class);
