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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/list', 'PostController@index')->name('list Post');
Route::get('/post', 'PostController@index')->name('list Post');
Route::get('/post/{id}/edit', 'PostController@listedit')->name('list edit post');
Route::put('/post/{id}/edit', 'PostController@edit')->name('edit Posts');
Route::delete('/post/{id}/delete','PostController@delete')->name('delete Posts');
Route::get('/post/add','PostController@add')->name('add Posts');
Route::post('/post/add','PostController@add')->name('add Posts');
