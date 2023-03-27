<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/view1/{nama}', function (string $nama) {
    return view('home', ['tamu' => $nama]);
});
Route::get('/view1', function (string $nama = "Guest") {
    return view('home', ['tamu' => $nama]);
});
Route::get('/', function () {
    return view('welcome');
});
