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

Route::get('/', 'ProdukController@index')->name('produk');
Route::get('edit/{produk}', 'ProdukController@edit')->name('produk.edit');
Route::view('create', 'produk.create')->name('produk.create');
Route::post('create', 'ProdukController@store')->name('produk.store');
Route::patch('{produk}', 'ProdukController@update')->name('produk.update');
Route::delete('{produk}', 'ProdukController@delete')->name('produk.delete');
