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
/* homePages Routes... */
Route::get('/','PagesController@root')->name('root');
/* authentication Routes...*/
Auth::routes();
/* user */
Route::resource('users','UsersController',['only'=>['show','update','edit']]);
/* topic */
Route::resource('topics', 'TopicsController', ['only' => ['index','create', 'store', 'update', 'edit', 'destroy']]);
/* seo slug */
Route::get('topics/{topic}/{slug?}','TopicsController@show')->name('topics.show');
/* categories */
Route::resource('categories','CategoriesController',['only'=>['show']]);
/* 上传图片 */
Route::post('upload_image','TopicsController@uploadImage')->name('topics.upload_image');
/* 帖子回复*/
Route::resource('replies', 'RepliesController', ['only' => ['store','destroy']]);