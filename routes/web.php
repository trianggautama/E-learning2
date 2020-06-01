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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/index', 'adminController@adminIndex')->name('adminIndex');

//kelas
Route::get('/kelas/index', 'kelasController@index')->name('kelasIndex');
Route::get('/kelas/edit', 'kelasController@edit')->name('kelasEdit');

//siswa
Route::get('/siswa/index', 'siswaController@index')->name('siswaIndex');
Route::get('/siswa/edit', 'siswaController@edit')->name('siswaEdit');

//mapel
Route::get('/mapel/index', 'mapelController@index')->name('mapelIndex');
Route::get('/mapel/edit', 'mapelController@edit')->name('mapelEdit');