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
Route::get('/authors', 'AuthorController@index')->name('author-index');
Route::get('/author/new', 'AuthorController@create')->name('author-create');
Route::post('/author/store', 'AuthorController@store')->name('author-store');
