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

Route::get('/home', 'PageController@showHome');
Route::get('/anime', 'PageController@showAnime');
Route::get('/video', 'PageController@showVideo');
Route::get('/new', 'PageController@showNew');
Route::get('/contact', 'PageController@showContact');
Route::get('/anime.show_anime', 'PageController@showDetail');
Route::get('/video.show_video', 'PageController@showDetail');
Route::get('/new.new_detail', 'PageController@showNewDetail');
Auth::routes();
