<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlSaya;

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

// ===== Mengarahkan link webPert8.test/beranda menuju controller controlSaya dan method index()

//Route::get('/beranda', [controlSaya::class, 'index']);  //===== FOrmat Laravel 8

Route::view('/beranda', 'beranda');  //- Mengirim langsung ke View tanpa Controller

//Route::get('/beranda', 'controlSaya@index');  //===== Format Laravel 7
