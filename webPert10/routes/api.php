<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/student', [StudentApiController::class, 'index']);
//== Menerima id dari API View/Link
Route::get('/student/{id}', [StudentApiController::class, 'studentById']);
//== Menerima nim dari API View/Link
Route::get('/student/nim/{nim}', [StudentApiController::class, 'studentByNim']);


//== Menambah data dari API View/Link
Route::get('/student', [StudentApiController::class, 'submit']);


// == Mengubah data dari API View/Link
Route::put('/student/{id}', [studentApiController::class, 'update']);


// == Menghapus data dari API View/Link
Route::delete('/student/{id}', [studentApiController::class, 'delete']);
