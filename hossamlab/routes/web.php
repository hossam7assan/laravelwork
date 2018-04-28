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

Route::get('posts', 'PostsController@index' )->name('posts.index');
// Route::get('posts', function() {
// 	return 'welcome from Posts';
// });
Route::get('posts/create','PostsController@create');
Route::post('posts','PostsController@store');
Route::get('post/{id}/', 'PostsController@show');
Route::delete('posts/{id}', 'PostsController@destroy');

Route::get('posts/{id}/edit','PostsController@edit');
Route::put('posts/{id}','PostsController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

