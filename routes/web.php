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

Route::get('/', 'ContohController@welcome');

Route::get('/tentang', 'ContohController@tentang');

Route::get('/domainhosting', 'ContohController@domainhosting');



Route::get('/buku', 'BukuController@index');
Route::get('/buku/create', 'BukuController@create')->name('buku.create');
Route::post('/buku', 'BukuController@store')->name('buku.store');
Route::get('/buku/delete/{id}', 'BukuController@destroy')->name('buku.destroy');
Route::get('/buku/edit/{id}', 'BukuController@edit')->name('buku.edit');
Route::post('/buku/update/{id}', 'BukuController@update')->name('buku.update');
Route::get('/buku/search', 'BukuController@search')->name('buku.search');


