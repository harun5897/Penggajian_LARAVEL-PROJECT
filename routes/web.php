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
Route::get('/data_karyawan/input_karyawan', 'AdminController@input_karyawan');
Route::get('/data_gaji/input_data_gaji', 'AdminController@input_data_gaji');
