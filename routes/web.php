<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('/kategori', 'CategoryController@index')->name('kategori');
Route::get('kategori/create', 'CategoryController@create')->name('kategori.create');
Route::post('kategori/store', 'CategoryController@store')->name('kategori.store');
Route::get('kategori/edit/{kategori}', 'CategoryController@edit')->name('kategori.edit');
Route::put('kategori/kategori/{kategori}', 'CategoryController@Update')->name('kategori.update');
Route::get('kategori/delete/{kategori}', 'CategoryController@destroy')->name('kategori.delete');

Route::get('produk', 'ProdukController@index')->name('produk');
Route::get('produk/create', 'ProdukController@create')->name('produk.create');
Route::post('produk/store', 'ProdukController@store')->name('produk.store');
Route::get('produk/edit/{produk}', 'ProdukController@edit')->name('produk.edit');
Route::put('produk/produk/{produk}', 'ProdukController@Update')->name('produk.update');
Route::get('produk/delete/{produk}', 'ProdukController@destroy')->name('produk.delete');
