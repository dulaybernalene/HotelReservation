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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/',"App\Http\Controllers\HotelController@index") ;
Route::get('/edit/{id}',"App\Http\Controllers\HotelController@edit") ;
Route::get('/show/{id}',"App\Http\Controllers\HotelController@show") ;
Route::get('/create',"App\Http\Controllers\HotelController@create") ;
Route::get('/store',"App\Http\Controllers\HotelController@store") ;
Route::get('/update/{id}',"App\Http\Controllers\HotelController@update") ;