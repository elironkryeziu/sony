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

//sony
Route::get('/sony', 'SonyController@index')->name('sony')->middleware('auth');
Route::get('/sony/{id}', 'SonyController@show')->name('single-sony')->middleware('auth');
Route::post('/sony', 'SonyController@start')->name('startSony')->middleware('auth');

//fatura
Route::get('/admin/sony', 'FaturaController@index')->name('fatura')->middleware('admin');
Route::get('/admin/pije', 'FaturaController@faturapije')->name('fatura-pije')->middleware('admin');


//pije
Route::get('/pije', 'PijeController@index')->name('pije')->middleware('auth');;


