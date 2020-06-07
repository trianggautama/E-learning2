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
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => ['admin']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/admin/index', 'adminController@adminIndex')->name('adminIndex');

//user
    Route::get('/user/index', 'userController@index')->name('userIndex');
    Route::post('/user/create', 'userController@store')->name('userStore');
    Route::get('/user/edit/{uuid}', 'userController@edit')->name('userEdit');
    Route::put('/user/edit/{uuid}', 'userController@update')->name('userUpdate');
    Route::get('/user/delete/{uuid}', 'userController@destroy')->name('userDestroy');

//periode
    Route::get('/periode/index', 'periodeController@index')->name('periodeIndex');
    Route::post('/periode/create', 'periodeController@store')->name('periodeStore');
    Route::get('/periode/edit/{uuid}', 'periodeController@edit')->name('periodeEdit');
    Route::put('/periode/edit/{uuid}', 'periodeController@update')->name('periodeUpdate');
    Route::get('/periode/delete/{uuid}', 'periodeController@destroy')->name('periodeDestroy');

//kelas
    Route::get('/kelas/index', 'kelasController@index')->name('kelasIndex');
    Route::post('/kelas/create', 'kelasController@store')->name('kelasStore');
    Route::get('/kelas/edit/{uuid}', 'kelasController@edit')->name('kelasEdit');
    Route::put('/kelas/edit/{uuid}', 'kelasController@update')->name('kelasUpdate');
    Route::get('/kelas/delete/{uuid}', 'kelasController@destroy')->name('kelasDestroy');

//siswa
    Route::get('/siswa/index', 'siswaController@index')->name('siswaIndex');
    Route::post('/siswa/index', 'siswaController@store')->name('siswaStore');
    Route::get('/siswa/show/{uuid}', 'siswaController@show')->name('siswaShow');
    Route::get('/siswa/edit/{uuid}', 'siswaController@edit')->name('siswaEdit');
    Route::put('/siswa/edit/{uuid}', 'siswaController@update')->name('siswaUpdate');
    Route::get('/siswa/delete/{uuid}', 'siswaController@destroy')->name('siswaDestroy');

//mapel
    Route::get('/mapel/index', 'mapelController@index')->name('mapelIndex');
    Route::post('/mapel/create', 'mapelController@store')->name('mapelStore');
    Route::get('/mapel/detail/{uuid}', 'mapelController@show')->name('mapelShow');
    Route::get('/mapel/edit/{uuid}', 'mapelController@edit')->name('mapelEdit');
    Route::put('/mapel/edit/{uuid}', 'mapelController@update')->name('mapelUpdate');
    Route::get('/mapel/delete/{uuid}', 'mapelController@destroy')->name('mapelDestroy');

//pertemuan
    Route::get('/pertemuan/index', 'pertemuanController@index')->name('pertemuanIndex');
    Route::post('/pertemuan/create', 'pertemuanController@store')->name('pertemuanStore');
    Route::get('/pertemuan/detail/{uuid}', 'pertemuanController@show')->name('pertemuanShow');
    Route::get('/pertemuan/edit/{uuid}', 'pertemuanController@edit')->name('pertemuanEdit');
    Route::put('/pertemuan/edit/{uuid}', 'pertemuanController@update')->name('pertemuanUpdate');
    Route::get('/pertemuan/delete/{uuid}', 'pertemuanController@destroy')->name('pertemuanDestroy');

//modul
    Route::get('/modul/index', 'modulController@index')->name('modulIndex');
    Route::post('/modul/create', 'modulController@store')->name('modulStore');
    Route::get('/modul/edit/{uuid}', 'modulController@edit')->name('modulEdit');
    Route::put('/modul/edit/{uuid}', 'modulController@update')->name('modulUpdate');
    Route::get('/modul/delete/{uuid}', 'modulController@destroy')->name('modulDestroy');

//tugas
    Route::get('/tugas/index', 'tugasController@index')->name('tugasIndex');
    Route::post('/tugas/create', 'tugasController@store')->name('tugasStore');
    Route::get('/tugas/detail/{uuid}', 'tugasController@show')->name('tugasShow');
    Route::get('/tugas/edit/{uuid}', 'tugasController@edit')->name('tugasEdit');
    Route::put('/tugas/edit/{uuid}', 'tugasController@update')->name('tugasUpdate');
    Route::get('/tugas/delete/{uuid}', 'tugasController@destroy')->name('tugasDestroy');

//Soal
    Route::get('/soal/index', 'soalController@index')->name('soalIndex');
    Route::post('/soal/create', 'soalController@store')->name('soalStore');
    Route::get('/soal/detail/{uuid}', 'soalController@show')->name('soalShow');
    Route::get('/soal/edit/{uuid}', 'soalController@edit')->name('soalEdit');
    Route::put('/soal/edit/{uuid}', 'soalController@update')->name('soalUpdate');
    Route::get('/soal/delete/{uuid}', 'soalController@destroy')->name('soalDestroy');

//Tes
    Route::get('/tes/index', 'tesController@index')->name('tesIndex');
    Route::post('/tes/create', 'tesController@store')->name('tesStore');
    Route::get('/tes/show', 'tesController@show')->name('tesShow');
    Route::get('/tes/edit/{uuid}', 'tesController@edit')->name('tesEdit');
    Route::put('/tes/edit/{uuid}', 'tesController@update')->name('tesUpdate');
    Route::get('/tes/delete/{uuid}', 'tesController@destroy')->name('tesDestroy');

//instruktur
    Route::get('/instruktur/index', 'instrukturController@index')->name('instrukturIndex');
    Route::post('/instruktur/create', 'instrukturController@store')->name('instrukturStore');
    Route::get('/instruktur/edit/{uuid}', 'instrukturController@edit')->name('instrukturEdit');
    Route::put('/instruktur/edit/{uuid}', 'instrukturController@update')->name('instrukturUpdate');
    Route::get('/instruktur/delete/{uuid}', 'instrukturController@destroy')->name('instrukturDestroy');

//Hasil Tes
    Route::get('/hasilTes/index', 'hasilTesController@index')->name('hasilTesIndex');
    Route::post('/hasilTes/create', 'hasilTesController@store')->name('hasilTesStore');
    Route::get('/hasilTes/edit/{uuid}', 'hasilTesController@edit')->name('hasilTesEdit');
    Route::put('/hasilTes/edit/{uuid}', 'hasilTesController@update')->name('hasilTesUpdate');
    Route::get('/hasilTes/delete/{uuid}', 'hasilTesController@destroy')->name('hasilTesDestroy');

//Hasil Tes
    Route::get('/tugasSiswa/index', 'tugasSiswaController@index')->name('tugasSiswaIndex');
    Route::post('/tugasSiswa/create', 'tugasSiswaController@store')->name('tugasSiswaStore');
    Route::get('/tugasSiswa/edit/{uuid}', 'tugasSiswaController@edit')->name('tugasSiswaEdit');
    Route::put('/tugasSiswa/edit/{uuid}', 'tugasSiswaController@update')->name('tugasSiswaUpdate');
    Route::get('/tugasSiswa/delete/{uuid}', 'tugasSiswaController@destroy')->name('tugasSiswaDestroy');

//Cetak Report
    Route::get('/siswa/cetak', 'reportController@siswa')->name('siswaCetak');
    Route::get('/mapel/cetak', 'reportController@mapel')->name('mapelCetak');
    Route::get('/pertemuan/cetak', 'reportController@pertemuan')->name('pertemuanCetak');
    Route::get('/pertemuan/mapel/cetak/{uuid}', 'reportController@pertemuanMapel')->name('pertemuanMapelCetak');

});

//halaman siswa
Route::get('halaman/siswa/index', 'adminController@siswaIndex')->name('halamanSiswaIndex');
Route::put('/halaman/siswa/index', 'siswaController@updateProfileSiswa')->name('updateProfileSiswa');
Route::get('siswa/pertemuan/index', 'pertemuanController@siswaIndex')->name('siswaPertemuanIndex');
Route::get('siswa/pertemuan/detail/{uuid}', 'pertemuanController@siswaShow')->name('siswaPertemuanShow');

Route::get('siswa/tes/index', 'tesController@siswaIndex')->name('siswaTesIndex');
Route::get('siswa/input/tes/index/{uuid}', 'tesController@inputTes')->name('inputTes');
Route::post('siswa/input/tes/index/{uuid}', 'tesController@jawaban')->name('updateTes');

Route::get('siswa/hasilTes/index', 'hasilTesController@siswaIndex')->name('siswaHasilTesIndex');


//halmaan instruktur
Route::get('halaman/instruktur/index', 'adminController@instrukturIndex')->name('halamanInstrukturIndex');
Route::get('intruktur/mapel/index', 'mapelController@instrukturIndex')->name('instrukturMapelIndex');
Route::get('instruktur/mapel/detail/{uuid}', 'mapelController@instrukturShow')->name('instrukturMapelShow');
Route::post('instruktur/pertemuan/create', 'pertemuanController@store')->name('instrukturPertemuanStore');
Route::get('instruktur/pertemuan/detail/{uuid}', 'pertemuanController@instrukturShow')->name('instrukturPertemuanShow');
Route::get('instruktur/pertemuan/edit/{uuid}', 'pertemuanController@instrukturEdit')->name('instrukturPertemuanEdit');
Route::put('instruktur/pertemuan/edit/{uuid}', 'pertemuanController@instrukturUpdate')->name('instrukturPertemuanUpdate');
Route::get('instruktur/pertemuan/delete/{uuid}', 'pertemuanController@destroy')->name('instrukturPertemuanDestroy');

Route::post('instruktur/modul/create', 'modulController@store')->name('instrukturModulStore');
Route::get('instruktur/modul/edit/{uuid}', 'modulController@instrukturEdit')->name('instrukturModulEdit');
Route::put('instruktur/modul/edit/{uuid}', 'modulController@instrukturUpdate')->name('instrukturModulUpdate');
Route::get('instruktur/modul/delete/{uuid}', 'modulController@destroy')->name('instrukturModulDestroy');


Route::post('instruktur/tugas/create', 'tugasController@store')->name('instrukturTugasStore');
Route::get('instruktur/tugas/edit/{uuid}', 'tugasController@instrukturEdit')->name('instrukturTugasEdit');
Route::put('instruktur/tugas/edit/{uuid}', 'tugasController@instrukturUpdate')->name('instrukturTugasUpdate');
Route::get('instruktur/tugas/delete/{uuid}', 'tugasController@destroy')->name('instrukturTugasDestroy');