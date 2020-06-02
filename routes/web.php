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

//periode
Route::get('/periode/index', 'periodeController@index')->name('periodeIndex');
Route::get('/periode/edit', 'periodeController@edit')->name('periodeEdit');

//kelas
Route::get('/kelas/index', 'kelasController@index')->name('kelasIndex');
Route::get('/kelas/edit', 'kelasController@edit')->name('kelasEdit');

//siswa
Route::get('/siswa/index', 'siswaController@index')->name('siswaIndex');
Route::get('/siswa/edit', 'siswaController@edit')->name('siswaEdit');
Route::get('/siswa/show', 'siswaController@show')->name('siswaShow');


//mapel
Route::get('/mapel/index', 'mapelController@index')->name('mapelIndex');
Route::get('/mapel/edit', 'mapelController@edit')->name('mapelEdit');
Route::get('/mapel/show', 'mapelController@show')->name('mapelShow');

//pertemuan
Route::get('/pertemuan/index', 'pertemuanController@index')->name('pertemuanIndex');
Route::get('/pertemuan/edit', 'pertemuanController@edit')->name('pertemuanEdit');
Route::get('/pertemuan/show', 'pertemuanController@show')->name('pertemuanShow');


//modul
Route::get('/modul/index', 'modulController@index')->name('modulIndex');
Route::get('/modul/edit', 'modulController@edit')->name('modulEdit');
Route::get('/modul/show', 'modulController@show')->name('modulShow');


//Tes
Route::get('/tes/index', 'tesController@index')->name('tesIndex');
Route::get('/tes/edit', 'tesController@edit')->name('tesEdit');
Route::get('/tes/show', 'tesController@show')->name('tesShow');

//Soal
Route::get('/soal/index', 'soalController@index')->name('soalIndex');
Route::get('/soal/edit', 'soalController@edit')->name('soalEdit');
Route::get('/soal/show', 'soalController@show')->name('soalShow');