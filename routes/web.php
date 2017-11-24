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
