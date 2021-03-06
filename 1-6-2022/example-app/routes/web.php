<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\studentControler;
use App\Http\Controllers\LoginControler;
use App\Models\Student;
use Illuminate\Http\Request;
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



Route::get('/posts/{id}/{name}', function ($id , $name) {
    return $id .$name;
});

// Route::get('/posts/search', function (Request $request) {
//     return  ;
// });


// Route::get('/' , [studentControler::class , 'display']);


// Route::get('/login',function(){
//     return view('login');
// });

// Route::get('/',function(){
//     return view('home');
// });


// route::get('/master' , function(){
//     return view('login');
// });

Route::get('/login' , [LoginControler::class , 'getdata']);

// Route::post('/student' , [StudentControler::class , 'display']);

Route::get('/' , [HomeControler::class , 'getdata']);

Route::get('/student' , [StudentControler::class , 'display']);

Route::get('/student/create' , [StudentControler::class , 'create']);

Route::delete('/student/{student}' , [StudentControler::class , 'delete']);

Route::get('/student/{student}/edit' , [StudentControler::class , 'show']);

Route::put('/student/{student}' , [StudentControler::class , 'update']);

Route::post('/student' , [StudentControler::class , 'store']);
