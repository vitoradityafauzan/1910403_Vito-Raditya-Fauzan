<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beranda;

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

Route::get('/', [beranda::class, 'beranda']);

Route::get('/galeri', [beranda::class, 'galeri']);

Route::get('/testing', function() {
    echo "<script>alert('Haloo, Guten Abend');</script>";
    return view('asgard');
});

//Route::get('/testing', view('asgard'));