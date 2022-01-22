<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// == Mengarahkan link utama menuju landing.blade.php
Route::view('/', 'landing');

Route::get('/student', [StudentController::class, 'index']);

// == Link pengarahan, add data

Route::get('/student/create', [StudentController::class, 'create']);
Route::post('/student/create', [StudentController::class, 'store']);

// == Link pengarahan, update data

Route::get('/student/{id}/edit', [StudentController::class, 'edit']);
Route::put('/student/{id}/edit', [StudentController::class, 'update']);

// == Link pengarahan, delete data

Route::delete('/student/{id}/delete', [StudentController::class, 'delete']);