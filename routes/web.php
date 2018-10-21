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

// Route::get('/', function(){
// 	return view('welcome');
// });



Route::get('/', 'imagesController@user_profile')->name('home');

Route::get('like', 'imagesController@like');
Route::post('storeimage', 'imagesController@store_image');
Route::post('storepost', 'postController@store_post');
Route::get('posts', 'postController@view_post')->name('posts');

Route::post('storecomment', 'commentController@store_comment');
Route::get('comments', 'commentController@view_comment');

Route::get('create-post', function(){ return view('create-post');});


//user profile
Route::get('myposts', 'postController@view_mypost');
Route::get('myphotos', 'imagesController@view_myphotos');
Route::get('myprofile', 'imagesController@view_myprofile');

Route::get('friendlist', 'imagesController@view_friendlist');
