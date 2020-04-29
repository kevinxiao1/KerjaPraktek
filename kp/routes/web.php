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

Route::get('/login','SiteController@Login')->name('Login');
Route::post('/doLogin','SiteController@doLogin')->name('doLogin');
Route::group(['prefix'=>'admin'], function() {
    Route::get('/dashboard','adminController@dashboard')->name('dashboard');

    // barang
    Route::get('/viewBarang','adminController@viewBarang')->name('viewBarang');
    // create
    Route::get('/createBarang','BarangController@createBarang')->name('createBarang');
    Route::post('/doCreateBarang','BarangController@doCreateBarang')->name('doCreateBarang');
    // delete
    Route::get('/deleteBarang','BarangController@deleteBarang')->name('deleteBarang');
    Route::get('/unDeleteBarang','BarangController@unDeleteBarang')->name('unDeleteBarang');

    //update
    Route::get('/updateBarang','BarangController@updateBarang')->name('updateBarang');
    Route::post('/doUpdateBarang','BarangController@doUpdateBarang')->name('doUpdateBarang');
//Kategori 
// view
    Route::get('/viewKategori','adminController@viewKategori')->name('viewKategori');
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
    Route::get('/viewSubKategori','adminController@viewSubKategori')->name('viewSubKategori');
// insert
    Route::get('/createSubKategori','SubKategoriController@createSubKategori')->name('createSubKategori');
    Route::get('/doCreateSubKategori','SubKategoriController@doCreateSubKategori')->name('doCreateSubKategori');
// update
    Route::get('/updateSubKategori','SubKategoriController@updateSubKategori')->name('updateSubKategori');
    Route::get('/doUpdateSubKategori','SubKategoriController@doUpdateSubKategori')->name('doUpdateSubKategori');
// delete
    Route::get('/doDeleteSubKategori','SubKategoriController@doDeleteSubKategori')->name('doDeleteSubKategori');
    Route::get('/undoDeleteSubKategori','SubKategoriController@undoDeleteSubKategori')->name('undoDeleteSubKategori');
});
