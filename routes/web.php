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

// Mengarahkan route root ('/') ke PenggunaController@index
Route::get('/', 'PenggunaController@index');

Route::group(['middleware' => 'auth'], function(){
    Route::resource('/home', 'DashboardController@index');
    Route::resource('/admin', 'AdminController');
    Route::get('/table/admin', 'AdminController@dataTable')->name('table.admin');

    Route::resource('/dokter', 'DokterController');
    Route::get('/table/dokter', 'DokterController@dataTable')->name('table.dokter');

    Route::resource('/penyakit', 'PenyakitController');
    Route::get('/table/penyakit', 'PenyakitController@dataTable')->name('table.penyakit');

    Route::resource('/gejala', 'GejalaController');
    Route::get('/table/gejala', 'GejalaController@dataTable')->name('table.gejala');

    Route::resource('/pengetahuan', 'PengetahuanController');
    Route::get('/table/pengetahuan', 'PengetahuanController@dataTable')->name('table.pengetahuan');
});

Route::resource('diagnosa', 'DiagnosaController');
Route::POST('laporan', 'DiagnosaController@cetakpdf')->name('cetakPdf');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pasien', 'PenggunaController@index');
Route::get('/pasien/dokter', 'PenggunaController@dokter');
Route::get('/pasien/gejala', 'PenggunaController@gejala');
Route::get('/pasien/penyakit', 'PenggunaController@penyakit');
