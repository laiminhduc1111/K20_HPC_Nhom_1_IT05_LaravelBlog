<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\login;
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
    return view('welcome');
});

Route::get('/blog',[BlogController::class,'index']);
Route::get('/readmore',[BlogController::class,'readmore']);
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/store',[LoginController::class,'store']);
Route::get('/admin/main',[AdminController::class,'index'])->name('admin.main')->middleware('auth');