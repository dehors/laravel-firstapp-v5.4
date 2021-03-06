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

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/name',function(){
	$name = config('app.name');
	return $name;
});

Route::get('/time',function(){
	$time = config('app.timezone');
	return $time;
});

Route::get('/runtime',function(){
	config(['app.timezone' => 'America/Mexico_City']);
	$time = config('app.timezone');
	return $time;
});

Route::get('controller','TestController@index');
Route::get('controllerresource','TestResourcesController@index');
Route::get('controllerresource/{name}/{subject?}','TestResourcesController@show');
Route::resource('task','TestResourcesController');