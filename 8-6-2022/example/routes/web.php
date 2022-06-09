<?php

use App\Http\Controllers\MovieController;
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

Route::get('/' , [MovieController::class , 'home']);


Route::get('/admin' , [MovieController::class , 'index']);
Route::get('/admin/create' , [MovieController::class , 'create']);
Route::delete('/admin/delete/{movie}' , [MovieController::class , 'destroy']);
Route::get('/admin/edit/{movie}' , [MovieController::class , 'edit']);
route::PUT('/admin/update/{movie}' , [MovieController::class , 'update']);
route::post('/admin/create' , [MovieController::class , 'store']);
