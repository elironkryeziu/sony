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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    //sony
    Route::get('/sony', 'SonyController@index')->name('sony');
    Route::get('/sony/{id}', 'SonyController@show')->name('single-sony');
    Route::post('/sony', 'SonyController@start')->name('startSony');
    
    //pije
    Route::get('/pije', 'PijeController@index')->name('pije');
});


Route::group(['middleware' => 'admin'], function () {
});

