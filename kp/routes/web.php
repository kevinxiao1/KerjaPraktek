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
Route::get('/login','SiteController@Login')->name('Login');
Route::post('/doLogin','SiteController@doLogin')->name('doLogin');
Route::group(['prefix'=>'admin'], function() {
    Route::get('/dashboard','adminController@dashboard')->name('dashboard');

    Route::get('/viewBarang','adminController@viewBarang')->name('viewBarang');
    Route::get('/deleteBarang','BarangController@deleteBarang')->name('deleteBarang');
    Route::get('/unDeleteBarang','BarangController@unDeleteBarang')->name('unDeleteBarang');


    Route::get('/viewKategori','adminController@viewKategori')->name('viewKategori');

    Route::get('/updateKategori','KategoriController@updateKategori')->name('updateKategori');
    Route::get('/doUpdateKategori','KategoriController@doUpdateKategori')->name('doUpdateKategori');
    Route::get('/doDeleteKategori','KategoriController@doDeleteKategori')->name('doDeleteKategori');
    Route::get('/undoDeleteKategori','KategoriController@undoDeleteKategori')->name('undoDeleteKategori');

    Route::get('/createKategori','KategoriController@createKategori')->name('createKategori');
    Route::get('/doCreateKategori','KategoriController@doCreateKategori')->name('doCreateKategori');




    Route::get('/viewSubKategori','adminController@viewSubKategori')->name('viewSubKategori');

    Route::get('/createSubKategori','SubKategoriController@createSubKategori')->name('createSubKategori');
    Route::get('/doCreateSubKategori','SubKategoriController@doCreateSubKategori')->name('doCreateSubKategori');

    Route::get('/updateSubKategori','SubKategoriController@updateSubKategori')->name('updateSubKategori');
    Route::get('/doUpdateSubKategori','SubKategoriController@doUpdateSubKategori')->name('doUpdateSubKategori');

    Route::get('/doDeleteSubKategori','SubKategoriController@doDeleteSubKategori')->name('doDeleteSubKategori');
    Route::get('/undoDeleteSubKategori','SubKategoriController@undoDeleteSubKategori')->name('undoDeleteSubKategori');
});
