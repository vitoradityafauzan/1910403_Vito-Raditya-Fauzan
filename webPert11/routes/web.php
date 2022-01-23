<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentApiController;
use App\Http\Controllers\AuthController;

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



 //== Mengarahkan link utama menuju landing.blade.php
    Route::view('/', 'landing');

    Route::get('/student', [StudentController::class, 'index'])->name('studentView');

    Route::get('/student/create', [StudentController::class, 'create'])->name('studentCreate');

        Route::post('/student/create', [StudentController::class, 'store']);

        // == Link pengarahan, update data

        Route::get('/student/{id}/edit', [StudentController::class, 'edit']);
        Route::put('/student/{id}/edit', [StudentController::class, 'update']);

        // == Link pengarahan, delete data

        Route::delete('/student/{id}/delete', [StudentController::class, 'delete']);






// Route::group(['namespace' => 'App\Http\Controllers'], function() {

//     // == Mengarahkan link utama menuju landing.blade.php
//     Route::view('/', 'landing');

//     Route::get('/student', [StudentController::class, 'index'])->name('studentView');

//     //== Kelompok Routes yg hanya bisa diakses jika tidak terauthentikasi
//     Route::group(['middleware' => ['guest']], function() {

//         Route::get('/student/register', [AuthController::class, 'registerShow'])->name('register.show');
//         Route::post('/student/register', [AuthController::class, 'register'])->name('register.perform');

//         Route::get('/student/login', [AuthController::class, 'loginShow'])->name('login.show');
//         Route::post('/student/login', [AuthController::class, 'login'])->name('login.perform');

//     });

//     //=== Kelompok Routes yg hanya bisa diakses jika terauthentikasi
//     Route::group(['middleware' => ['auth']], function() {

//         Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//         // == Link pengarahan, add data

//         Route::get('/student/create', [StudentController::class, 'create']);

//         Route::post('/student/create', [StudentController::class, 'store']);

//         // == Link pengarahan, update data

//         Route::get('/student/{id}/edit', [StudentController::class, 'edit']);
//         Route::put('/student/{id}/edit', [StudentController::class, 'update']);

//         // == Link pengarahan, delete data

//         Route::delete('/student/{id}/delete', [StudentController::class, 'delete']);

//     });

// });