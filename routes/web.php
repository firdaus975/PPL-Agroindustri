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

//login
Route::get('/','LoginController@login')->name('login');
Route::post('/postlogin','LoginController@postlogin')->name('postLogin');
Route::get('/logout','LoginController@logout')->name('logout');
Route::group(['middleware' => ['auth']], function () {
    //dashboard
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    //Route::get('/profile', 'ProfileController@index');
    Route::get('/profile/{id}','ProfileController@profile')->name('profile');
    Route::post('/profile/{id}/update','ProfileController@update')->name('profileUpdate');
    //Pendapatan karet
    Route::get('/pendapatan-karet', 'Pendapatan_KaretController@index')->name('pendapatan');
    Route::get('/pendapatan-karet/{id}/edit', 'Pendapatan_KaretController@edit')->name('editPendapatan');
    Route::post('/pendapatan-karet/{id}/update', 'Pendapatan_KaretController@update')->name('updatePendapatan');
    Route::get('/pendapatan-karet/tambah-pendapatan', 'Pendapatan_KaretController@show')->name('tambahPendapatan');
    Route::post('/pendapatan-karet/tambah-pendapatan', 'Pendapatan_KaretController@create')->name('postPendapatan');


    //perkiraan pendapatan
    Route::get('/perkiraan-pendapatan', 'Perkiraan_PendapatanController@index')->name('perkiraan');
    
    //keuangan
    Route::get('/keuangan', 'KeuanganController@index')->name('keuangan');
    
    //pegawai
    Route::get('/pegawai', 'PegawaiController@index')->name('pegawai');
    Route::get('/pegawai/buat_akun', 'PegawaiController@indexcreate')->name('buatAkun');
    Route::post('/pegawai/buat_akun', 'PegawaiController@create')->name('postBuatAkun');
    Route::get('/pegawai/{id}/edit', 'PegawaiController@edit')->name('editPegawai');
    Route::post('/pegawai/{id}/update', 'PegawaiController@update')->name('updatePegawai');
});



/*route::get('/login','LoginController@pageLogin')->name('login')->middleware('guest');
route::post('/ceklogin','LoginController@cekLogin')->name('ceklogin')->middleware('guest');
route::get('/logout','LoginAuthController@logoutLogin')->name('logout');

route::get('/dashboard','LoginController@dashboard')->name('dashboard')->middleware('auth');*/

