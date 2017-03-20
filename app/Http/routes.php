<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('/dosen/tambah','DosenController@awal');
Route::get('/dosenmatakuliah/tambah','DosenMatakuliahController@awal');
Route::get('/jadwalmatakuliah/tambah','JadwalMatakuliahController@awal');
Route::get('/mahasiswaa/tambah','MahasiswaaController@awal');
Route::get('/matakuliah/tambah','MatakuliahController@awal');
Route::get('/ruangan/tambah','RuanganController@awal');
Route::get('pengguna/{pengguna}', function ($pengguna)
{
    return "Hello world dari pengguna $pengguna";
});