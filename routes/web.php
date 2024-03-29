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

Route::group(['prefix'=>'books'],function (){
    Route::get('/','BookController@index')->name('books.index');
    Route::get('delete/{id}','BookController@delete')->name('books.delete');
    Route::get('destroy/{id}','BookController@destroy')->name('books.destroy');
    Route::get('update/{id}','BookController@edit')->name('books.edit');
    Route::post('update/{id}','BookController@update')->name('books.update');
    Route::get('create/','BookController@create')->name('books.create');
    Route::post('create/','BookController@store')->name('books.store');
    Route::get('show/{id}','BookController@show')->name('books.show');
});
