<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\ProductController;
use Illuminate\Routing\Router;

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


Route::prefix('admin')->group(function(){
    Route::get('/login',[LoginController::class,'index'])->name('login');
    Route::post('/store',[LoginController::class,'store']);
    Route::get('/main',[AdminController::class,'index'])->name('admin.main')->middleware('auth');

  Route::prefix('product')->group(function(){
    Route::get('/add-product',[ProductController::class,'addProduct'])->name('add.product');
    Route::post('/add-product',[ProductController::class,'saveProduct'])->name('save.product');
    Route::get('/list-product',[ProductController::class,'listProduct'])->name('list.product');
    Route::get('/edit-product/{id}',[ProductController::class,'editProduct'])->name('edit.product');
    Route::post('/update-product',[ProductController::class,'updateProduct'])->name('update.product');
    Route::get('/delete-product/{id}',[ProductController::class,'deleteProduct'])->name('delete.product');
    
  });
});
