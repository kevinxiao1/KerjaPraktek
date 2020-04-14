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

Route::get('/','SiteController@Home')->name('Home');
Route::get('/products','SiteController@Products')->name('Products');

Route::group(['prefix'=>'admin'], function() {
    Route::get('/dashboard','adminController@dashboard')->name('dashboard');
    Route::get('/viewBarang','adminController@viewBarang')->name('viewBarang');
    Route::get('/viewKategori','adminController@viewKategori')->name('viewKategori');
});
