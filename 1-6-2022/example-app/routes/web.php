<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\studentControler;
use App\Models\student;
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
//     return view('layout.master');
// });


Route::get('/' , [HomeControler::class , 'getdata']);
