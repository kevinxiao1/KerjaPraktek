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
Route::get('/products/kategori/{kategori}','SiteController@ProductsKategori')->name('ProductsKategori');
Route::get('/products/subkategori/{subkategori}','SiteController@ProductsSubKategori')->name('ProductsSubKategori');
Route::get('/products/search','SiteController@ProductsSearch')->name('ProductsSearch');
Route::get('/products/productsdetail/{id}','SiteController@ProductsDetail')->name('ProductsDetail');

Route::get('/loginSSD','SiteController@Login')->name('Login');
Route::post('/doLogin','SiteController@doLogin')->name('doLogin');
Route::group(['prefix'=>'admin'], function() {
    Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
    Route::get('/Logout','AdminController@Logout')->name('Logout');

    // barang
    Route::get('/viewBarang','AdminController@viewBarang')->name('viewBarang');
    // create
    Route::get('/createBarang',array('as'=>'createBarang','uses'=>'BarangController@createBarang'));
    //ajax
    Route::get('/createBarang/ajax/{id}',array('as'=>'createBarang.ajax','uses'=>'BarangController@barangAjax'));

    Route::post('/doCreateBarang','BarangController@doCreateBarang')->name('doCreateBarang');
    // delete
    Route::get('/deleteBarang','BarangController@deleteBarang')->name('deleteBarang');
    Route::get('/unDeleteBarang','BarangController@unDeleteBarang')->name('unDeleteBarang');

    //update
    Route::get('/updateBarang','BarangController@updateBarang')->name('updateBarang');
    Route::post('/doUpdateBarang','BarangController@doUpdateBarang')->name('doUpdateBarang');
//Kategori 
// view
    Route::get('/viewKategori','AdminController@viewKategori')->name('viewKategori');
// update
    Route::get('/updateKategori','KategoriController@updateKategori')->name('updateKategori');
    Route::get('/doUpdateKategori','KategoriController@doUpdateKategori')->name('doUpdateKategori');
    // delete
    Route::get('/doDeleteKategori','KategoriController@doDeleteKategori')->name('doDeleteKategori');
    Route::get('/undoDeleteKategori','KategoriController@undoDeleteKategori')->name('undoDeleteKategori');
// insert
    Route::get('/createKategori','KategoriController@createKategori')->name('createKategori');
    Route::get('/doCreateKategori','KategoriController@doCreateKategori')->name('doCreateKategori');



// Subkategori
// view
    Route::get('/viewSubKategori','AdminController@viewSubKategori')->name('viewSubKategori');
// insert
    Route::get('/createSubKategori','SubKategoriController@createSubKategori')->name('createSubKategori');
    Route::get('/doCreateSubKategori','SubKategoriController@doCreateSubKategori')->name('doCreateSubKategori');
// update
    Route::get('/updateSubKategori','SubKategoriController@updateSubKategori')->name('updateSubKategori');
    Route::get('/doUpdateSubKategori','SubKategoriController@doUpdateSubKategori')->name('doUpdateSubKategori');
// delete
    Route::get('/doDeleteSubKategori','SubKategoriController@doDeleteSubKategori')->name('doDeleteSubKategori');
    Route::get('/undoDeleteSubKategori','SubKategoriController@undoDeleteSubKategori')->name('undoDeleteSubKategori');

    //Konten
    // view
    Route::get('/viewKonten','AdminController@viewKonten')->name('viewKonten');
    // insert
    Route::get('/createKonten','KontenController@createKonten')->name('createKonten');
    Route::get('/doCreateKonten','KontenController@doCreateKonten')->name('doCreateKonten');
    // update
    Route::get('/updateKonten','KontenController@updateKonten')->name('updateKonten');
    Route::get('/doUpdateKonten','KontenController@doUpdateKonten')->name('doUpdateKonten');
    // delete
    Route::get('/doDeleteKonten','KontenController@doDeleteKonten')->name('doDeleteKonten');
    Route::get('/undoDeleteKonten','KontenController@undoDeleteKonten')->name('undoDeleteKonten');
});
