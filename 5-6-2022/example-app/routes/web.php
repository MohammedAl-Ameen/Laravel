<?php

use App\Http\Controllers\studentsController;
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

Route::get('/', [studentsController::class , 'index']);

Route::get('/create', [studentsController::class , 'create']);

Route::delete('/delete/{student}', [studentsController::class , 'delete']);

Route::post('/create', [studentsController::class , 'store']);

Route::get('/edit/{student}', [studentsController::class , 'edit']);

Route::put('/update/{student}', [studentsController::class , 'update']);