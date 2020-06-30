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

// Route::get('/', '');

Route::get('/bbs','PostsController@index')->middleware('auth')->name('posts.index');
Route::get('bbs/show/{id}','PostsController@show')->middleware('auth')->name('posts.show');
Route::post('bbs/commentAdd','PostsController@commentAdd')->middleware('auth')->name('posts.commentAdd');
Route::get('bbs/creaet','PostsController@create')->middleware('auth')->name('posts.create');
Route::post('bbs/store','PostsController@store')->middleware('auth')->name('posts.store');
Route::get('bbs/edit','PostsController@edit')->middleware('auth')->name('posts.edit');
Route::get('bbs/destroy','PostsController@destroy')->middleware('auth')->name('posts.destroy');
Route::get('bbs/comment/del','PostsController@commentDel')->middleware('auth')->name('posts.comment.delete');

Route::get('user/show','UserController@show')->middleware('auth')->name('user.show');
Route::get('user/edit','UserController@edit')->middleware('auth')->name('user.edit');
Route::post('user/update','UserController@update')->middleware('auth')->name('user.update');
Route::get('user/delete','UserController@delete')->middleware('auth')->name('user.delete');
Route::post('user/remove','UserController@remove')->middleware('auth')->name('user.remove');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
