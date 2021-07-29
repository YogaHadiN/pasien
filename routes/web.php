<?php

use Illuminate\Support\Facades\Route;
use App\User;

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

/* Route::get('/', function () { */
/* 	return User::all(); */
/* }); */

Route::get('/', 'AntrianController@index');
Route::get('antrianperiksa/monitor', 'AntrianController@monitor');
Route::get('antrianperiksa/monitor/convert_sound_to_array', 'AntrianController@convertSoundToArray');
Route::get('validasi/antigen/{id}', 'ValidateController@antigen');
Route::get('validasi/antibodi/{id}', 'ValidateController@antibodi');
Route::get('validasi/surat_sakit/{id}', 'ValidateController@surat_sakit');
Route::get('antrianperiksa/fail', 'AntrianController@fail');
Route::get('antrianperiksa/{id}', 'AntrianController@antri');
Route::get('antrianperiksa/monitor/getData/{panggil_pasien}', 'AntrianController@updateJumlahAntrian');

