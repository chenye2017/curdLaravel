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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/test', 'HomeController@test')->name('test');

Route::get('/article/{article}', 'ArticleController@show');
Route::post('/comment', 'CommentController@store');

Route::group(['middleware'=>'auth', 'namespace'=>'Admin', 'prefix'=>'admin'], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/article', 'ArticleController@index');

    //文章相关
    Route::get('/article/create', 'ArticleController@create');
    Route::post('/article', 'ArticleController@store');
    Route::get('/article/{article}', 'ArticleController@show');
    Route::get('/article/{article}/edit', 'ArticleController@edit');
    Route::patch('/article/{article}', 'ArticleController@update');
    Route::delete('/article/{article}', 'ArticleController@destroy');
});