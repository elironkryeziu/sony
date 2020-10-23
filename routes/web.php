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
Route::post('/close/{id}', 'SonyController@close')->name('closeSony')->middleware('auth');


//fatura
Route::get('/admin/sony', 'FaturaController@index')->name('fatura')->middleware('admin');
Route::get('/admin/shitjet', 'FaturaController@indexPijet')->name('faturatPije')->middleware('admin');
Route::get('/admin/pije', 'FaturaController@faturapije')->middleware('admin');


//pije
Route::get('/pije', 'PijeController@index')->name('pije')->middleware('auth');
Route::get('/pije/furnizim', 'PijeController@furnizim')->name('pije')->middleware('auth');
Route::get('/pije/new', 'PijeController@create')->name('newPije')->middleware('admin');
Route::get('/pije/update/{id}', 'PijeController@update')->middleware('admin');

Route::post('/pije/new', 'FaturaController@store')->name('addPije')->middleware('admin');
Route::post('/pije/furnizim', 'PijeController@addFurnizim')->name('furnizim')->middleware('admin');
Route::put('/pije/update/{id}', 'FaturaController@update')->name('updatePije')->middleware('admin');
Route::delete('/pije/{id}', 'PijeController@delete')->middleware('admin');

Route::post('/sell/{id}', 'PijeController@sell')->name('sellPije')->middleware('auth');
Route::post('/pay/{id}', 'PijeController@pay')->name('payPije')->middleware('auth');


