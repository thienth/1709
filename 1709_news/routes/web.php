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
use Illuminate\Http\Request;

Route::get('test-params/{name}/{age?}', 
			function(Request $request){


	return $request->name;
})->name('1709-test');	

Route::post('test-param', function(Request $request){
	return "Request dang post co gia tri: username = $request->username, password = $request->password";
});


