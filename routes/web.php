<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'BlogController@home')->name('home');
Route::get('post/{slug}', 'BlogController@post')->name('post');
Route::get('posts/by-category/{id}', 'BlogController@category')->name('category');
Route::get('posts/by-author/{id}', 'BlogController@author')->name('author');
Route::post('posts/search', 'BlogController@search')->name('search');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
