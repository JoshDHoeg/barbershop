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

Auth::routes();

Route::get('/', 'ShopController@index')->name('home');
Route::get('/edit', 'ShopController@index')->name('edit');

Route::resources([
    'store' => 'ShopController',
    'booking' => 'BookingController'
  ]);
