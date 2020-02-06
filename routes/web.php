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
    return view('auths.login');
});
// login
Route::get('/masuk', 'AuthController@login')->name('login');
Route::post('/postmasuk', 'AuthController@postmasuk');
Route::get('/logout', 'AuthController@logout');
//login


Route::group(['middleware' => ['auth', 'checkRole:Staff', 'checkDivisi:Accounting']], function () {
    // Route::get('/dashboard', 'AdminController@dashboard');
    Route::get('/data_karyawan', 'AdminController@data_karyawan');
    Route::get('/data_gaji', 'AdminController@data_gaji');
    Route::get('/transaksi', 'AdminController@transaksi');
    Route::get('/data_kasbon', 'AdminController@data_kasbon');

    Route::get('/data_karyawan/update_karyawan', 'AdminController@update_karyawan');
    Route::get('/gaji', 'AdminController@update_gaji');
    Route::get('/kasbon', 'AdminController@kasbon');
    Route::get('/hitung_transaksi', 'AdminController@hitung_transaksi');

    Route::post('/karyawan/create', 'AdminController@create');

    Route::get('data_karyawan/{nip}/edit', 'AdminController@edit');
    Route::post('data_karyawan/{nip}/update', 'AdminController@update');
    Route::get('data_karyawan/{nip}/delete', 'AdminController@delete');

    Route::get('gaji/{nip}/gaji', 'AdminController@edit_gaji');
    Route::post('gaji/{nip}/update_gaji', 'AdminController@gaji_update');

    Route::get('kasbon/{nip}/kasbon', 'AdminController@edit_kasbon');
    Route::post('kasbon/{nip}/kasbon_update', 'AdminController@kasbon_update');
    Route::post('kasbon/input', 'AdminController@kasbon_input');

    Route::get('transaksi/{nip}/edit', 'AdminController@transaksi_edit');
    Route::get('transaksi/{nip}/reset', 'AdminController@transaksi_reset1');
    Route::get('transaksi/reset', 'AdminController@transaksi_reset2');

    Route::post('/transaksi/{nip}/create', 'AdminController@create_transaksi');

    Route::get('/ResetPass/{user_id}', 'AdminController@ResetPass');
});

Route::group(['middleware' => ['auth', 'checkRole:Pimpinan,Staff,Operasional']], function () {
    Route::get('/dashboard', 'AdminController@dashboard');
    Route::get('/laporan', 'AdminController@laporan');
    Route::post('/laporan/lap_manager', 'AdminController@cetak_laporan');
    Route::get('/transaksi/{id}/invoice', 'AdminController@invoice_cetak');
    Route::post('/ganti_password', 'AdminController@ganti_password');
    Route::get('/gaji_karyawan', 'AdminController@gaji_karyawan');
});

Route::get('manager', 'AdminController@manager');
Route::get('/invoice', 'AdminController@invoice');
Route::get('/lap_manager', 'AdminController@lap_manager');
