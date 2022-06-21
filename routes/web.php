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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/koneksi', function () {
    return view('koneksi');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/formMhs', function () {
    return view('formulirMhs');
});

Route::get('/mahasiswa', 'MahasiswaController@mahasiswa');
Route::get('/mahasiswa/cari', 'MahasiswaController@pencarian');
Route::get('/mahasiswa/formMhs', 'MahasiswaController@formulirmahasiswa');
Route::post('/mahasiswa/simpanMhs', 'MahasiswaController@simpanmahasiswa');

Route::get('/mahasiswa/editMhs/{id}', 'MahasiswaController@editmahasiswa');
Route::put('/mahasiswa/updatemahasiwa/{id}', 'MahasiswaController@updatemahasiswa');

Route::get('/mahasiswa/hapusMhs/{id}', 'MahasiswaController@hapusmahasiswa');

Route::get('/user', 'AuthController@user');
Route::get('/user/formuliruser', 'AuthController@formuliruser');
Route::post('/user/simpanUser', 'AuthController@simpanuser');
Route::put('/user/updateuser/{id}', 'AuthController@updateuser');

Route::get('/login', 'AuthController@login');

Route::post('/user/ceklogin', 'AuthController@ceklogin');

Route::get('/logout', 'AuthController@logout');*/


Route::group(['middleware' => ['auth']], function(){

    Route::get('/mahasiswa', 'MahasiswaController@mahasiswa');

    Route::get('/mahasiswa/cari', 'MahasiswaController@cari');
    
    Route::get('/mahasiswa/formulirmahasiswa', 'MahasiswaController@formulirmahasiswa'); 
    
    Route::post('/mahasiswa/simpanmahasiswa', 'MahasiswaController@simpanmahasiswa');
    
    Route::get('/mahasiswa/editmhs/{id}', 'MahasiswaController@editmhs');
    
    Route::put('/mahasiswa/updatemhs/{id}', 'MahasiswaController@updatemhs');
    
    Route::get('/mahasiswa/deletemhs/{id}', 'MahasiswaController@deletemhs');
    
    Route::get('/user', 'AuthController@user');
    
    Route::get('/user/formuliruser', 'AuthController@formuliruser');
    
    Route::post('/user/simpanuser', 'AuthController@simpanuser');
    
    Route::get('/user/edituser/{id}', 'AuthController@edituser');
    
    Route::put('/user/updateuser/{id}', 'AuthController@updateuser');
    
    Route::get('/user/hapususer/{id}', 'AuthController@hapususer');
    
});

Route::get('/login', 'AuthController@login')->name('login')->middleware('guest');

Route::post('/user/ceklogin', 'AuthController@ceklogin')->middleware('guest');

Route::get('/logout', 'AuthController@logout')->middleware('auth');

