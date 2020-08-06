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
Route::post('/blog', 'BlogController@post')->name('post.blog');
Route::match(['get', 'post'],'/daftar-blog', 'BlogController@index')->name('index.blog');
Route::match(['get', 'post'],'/update-blog/{id}', 'BlogController@edit')->name('blog.update');

