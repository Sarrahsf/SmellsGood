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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin','AdminController@index');
Route::get('/shop','ShopController@index');
Route::get('/shop/create', 'ShopController@create');
Route::post('/shop', 'ShopController@store');
Route::get('/shop/{id}/edit','ShopController@edit');
Route::patch('/shop/{id}', 'ShopController@update');
Route::delete('/shop/{id}', 'ShopController@destroy');
Route::get('/members','MembersController@index');
Route::get('/members/cari','MembersController@cari');

Route::get('/user','UserController@index');
Route::get('/user/loginuser','UserController@login');
Route::get('/produk','ProdukController@index');
Route::get('/produk/cari','ProdukController@cari');
Route::get('/order/create', 'OrderController@create');
Route::post('/order/create', 'OrderController@store');
Route::get('/transaksi','TransaksiController@index');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
