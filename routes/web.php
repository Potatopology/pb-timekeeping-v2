<?php


Route::get('/','CmsController@login');

Route::group(['prefix'=>'users'],function(){
	Route::get('/','CmsController@users');
});

Route::get('attendance','AttendanceController@index');

Route::get('test','CmsController@test');

Route::post('logger','CmsController@logger');
