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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',"Student1Controller@index") ;
Route::get('/edit/{id}',"Student1Controller@edit") ;
Route::get('/show/{id}',"Student1Controller@show") ;
Route::get('/create',"Student1Controller@create") ;
Route::post('/store',"Student1Controller@store") ;
Route::post('/update/{id}',"Student1Controller@update") ;
Route::post('/delete/{id}',"Student1Controller@update") ;
Route::get('/delete/{id}','Student1Controller@destroy');