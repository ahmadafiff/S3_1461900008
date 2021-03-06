<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/tampil0008',[BukuController::class,'index']);
Route::get('/tambah0008',[BukuController::class,'tambah']);
Route::post('/store',[BukuController::class,'store']);
Route::get('/edit0008/{id}',[BukuController::class,'edit']);
Route::post('/update',[BukuController::class,'update']);
Route::get('/hapus/{id}',[BukuController::class,'destroy']);
