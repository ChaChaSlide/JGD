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

Route::get('inventory','InventoryController@index');
Route::get('navigation','NavigationController@index');
Route::get('about','AboutController@index');
Route::get('contact','ContactController@index');
Route::get('login','LoginController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
