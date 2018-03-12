<?php

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
Route::get('1709', function(){
	return view('1709-form');
});
Route::post('1709', function(){
	return "post 1709 url";
});
Route::get('thienth', function(){
	return response()->redirect('1709');
});
