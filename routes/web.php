<?php

// use Illuminate\Support\Facades\Route;
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

Route::match(['get', 'post'], 'login', 'LoginController@login')->name('login');
Route::match(['get', 'post'], '/register', 'LoginController@register');
Route::get('/logout', 'LoginController@logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@dashboard');
    Route::match(['get', 'post'], '/farmings', 'FarmingController@index');
    Route::match(['get', 'post'], '/farmings/add', 'FarmingController@add');
    Route::match(['get', 'post'], '/farmings/edit/{id}', 'FarmingController@edit');
    Route::get('/farmings/delete/{id}', 'FarmingController@delete');
    
    Route::match(['get', 'post'], '/fields', 'FieldController@index');
    Route::match(['get', 'post'], '/fields/add', 'FieldController@add'); 
    Route::match(['get', 'post'], '/fields/edit/{id}', 'FieldController@edit');
    Route::get('/fields/delete/{id}', 'FieldController@delete');
    
    Route::match(['get', 'post'], '/tractors', 'TractorController@index');
    Route::match(['get', 'post'], '/tractors/add', 'TractorController@add');
    Route::match(['get', 'post'], '/tractors/edit/{id}', 'TractorController@edit');
    Route::get('/tractors/delete/{id}', 'TractorController@delete');
});


