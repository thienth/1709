<?php 

Route::get('/', function(){
	return "admin dashboard!";
});
Route::get('test', function() {
    return "test admin";
});
// Route::group(['prefix' => 'category'], function(){
// 	Route::get('index', 'sdfsdfdsf');
// 	Route::get('add', 'sdfsdfdsf');
// });

 ?>