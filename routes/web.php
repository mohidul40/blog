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

// Route::get('/', 'SiteController@home');
// Route::get('/about', 'SiteController@about');

Route::resource('admin/posts', 'PostController');

// Route::get('/', function(){
// 	$data = \DB::table('posts')->get();
// 	return $data;
// });
