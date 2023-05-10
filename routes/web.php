<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get(  '/',[\App\Http\Controllers\client\HomeCategories::class,'index']);
Route::get('/admin-panel', function () {return view('admin.home');});
//----------------------------------------------------------categories---------------------------------------------------------
Route::resource('categories',CategoryController::class);
/*Route::get('/categories',[\App\Http\Controllers\Admin\CategoryController::class,'index']);
Route::get('/categories/create',[\App\Http\Controllers\Admin\CategoryController::class,'create']);
Route::post('/categories/store',[\App\Http\Controllers\Admin\CategoryController::class,'store']);
Route::get('/categories/{category}/edit',[\App\Http\Controllers\Admin\CategoryController::class,'edit']);
Route::patch('/categories/{category}',[\App\Http\Controllers\Admin\CategoryController::class,'update']);
Route::delete('/categories/{category}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy']);*/

