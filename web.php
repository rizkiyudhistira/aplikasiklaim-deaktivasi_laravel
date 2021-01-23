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

Route::get('/', function() {
    if (Auth::check()) {
        return redirect('/klaim');
    } else {
    return view('index');
    }
});

Route::get('/', 'ContohController@welcome');
Route::get('/klaim', 'ContohController@klaim');
Route::get('/deaktivasi', 'ContohController@deaktivasi');
Route::get('/rekap', 'ContohController@rekap');

Route::get('/klaim', 'KlaimController@index')->middleware('auth');
Route::get('/klaim/create', 'KlaimController@create')->name('klaim.create');
Route::post('/klaim', 'KlaimController@store')->name('klaim.store');

Route::get('/deaktivasi', 'DeaktivasiController@index')->middleware('auth');
Route::get('/deaktivasi/create', 'DeaktivasiController@create')->name('deaktivasi.create');
Route::post('/deaktivasi', 'DeaktivasiController@store')->name('deaktivasi.store');

Route::get('/klaim', 'KlaimController@index');
Route::get('/deaktivasi', 'DeaktivasiController@index');

Route::get('/klaim/edit{id}', 'KlaimController@edit')->name('klaim.edit');
Route::post('/klaim/update/{id}', 'KlaimController@update')->name('klaim.update');

Route::get('/deaktivasi/edit{id}', 'DeaktivasiController@edit')->name('deaktivasi.edit');
Route::post('/deaktivasi/update/{id}', 'DeaktivasiController@update')->name('deaktivasi.update');

Route::post('/klaim/delete/{id}', 'KlaimController@destroy')->name('klaim.destroy');
Route::post('/deaktivasi/delete/{id}', 'DeaktivasiController@destroy')->name('deaktivasi.destroy');

Route::get('klaim/search','KlaimController@search')->name('klaim.search');
Route::get('deaktivasi/search','DeaktivasiController@search')->name('deaktivasi.search');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@index');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/klaim', 'KlaimPDFController@index');
Route::get('/klaim/cetak_pdf', 'KlaimPDFController@cetak_pdf');

Route::get('/deaktivasi', 'DeaktivasiController@index');
Route::get('/deaktivasi/cetak_pdf', 'DeaktivasiController@cetak_pdf');

Route::get('/print_klaim', 'PrintKlaimController@print')->name('print_klaim');
Route::get('/print_deaktivasi', 'PrintDeaktivasiController@print')->name('print_deaktivasi');

Route::get('klaim/{periode_tagihan}', function ($periode_tagihan) {
    return 'klaim '.$periode_tagihan;
});

Route::get('klaim/{tgl_terima}', function ($tgl_terima) {
    return 'klaim '.$tgl_terima;
});

Route::get('klaim/{customer}', function ($customer) {
    return 'klaim '.$customer;
});

Route::get('klaim/{produk}', function ($produk) {
    return 'klaim '.$produk;
});

Route::get('klaim/{dasar_permohonan}', function ($dasar_permohonan) {
    return 'klaim '.$dasar_permohonan;
});