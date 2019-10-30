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

Route::get('/dashboard', 'AdminController@dashboard');
Route::get('/data_karyawan', 'AdminController@data_karyawan');
Route::get('/data_gaji', 'AdminController@data_gaji');
Route::get('/transaksi', 'AdminController@transaksi');
Route::get('/laporan', 'AdminController@laporan');
