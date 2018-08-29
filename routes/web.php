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
    return view('home');
});

//ini cms
Auth::routes();

Route::get('/admincms',['uses' => 'AdminHomeController@index' ]);


//ini web
Route::get('/blog', ['uses' => 'BlogController@index'])->name('blog');
Route::get('/', ['uses' => 'HomeController@index'])->name('home');
Route::get('/blog-detail', ['uses' => 'BlogController@detail'])->name('detailBlog');







Route::get('/home', 'HomeController@index')->name('home');
