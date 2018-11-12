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

//Route::get('/', function () {
//    return view('main');
//});

Route::get('/', 'MainController@index');
Route::get('/about', 'AboutController@index');
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@index');
Route::get('/news', 'ProductController@index');
Route::get('/services', 'ServiceController@index');
Route::get('/doctors', 'PersonController@index');

Route::resource('/single_news', 'SingleController');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
