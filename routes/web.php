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
    return view('auth.login');
});
//login
Route::get('/login','LoginController@login')->name('login');
Route::post('/postlogin','LoginController@postlogin');
Route::get('/logout','LoginController@logout');
Route::group(['middleware' => ['auth']], function () {
    
    //dashboard
    Route::get('/dashboard', 'DashboardController@index');
    //Route::get('/profile', 'ProfileController@index');
    Route::get('/profile/{id}','ProfileController@profile')->name('profile');
    Route::post('/profile/{id}/update','ProfileController@update');
    //Pendapatan karet
    Route::get('/pendapatan-karet', 'Pendapatan_KaretController@index');
    
    //perkiraan pendapatan
    Route::get('/perkiraan-pendapatan', 'Perkiraan_PendapatanController@index');
    
    //keuangan
    Route::get('/keuangan', 'KeuanganController@index');
    
    //pegawai
    Route::get('/pegawai', 'PegawaiController@index');
    Route::get('/pegawai/buat_akun', 'PegawaiController@indexcreate');
    Route::post('/pegawai/buat_akun', 'PegawaiController@create');
    Route::get('/pegawai/{id}/edit', 'PegawaiController@edit');
    Route::post('/pegawai/{id}/update', 'PegawaiController@update');
});



/*route::get('/login','LoginController@pageLogin')->name('login')->middleware('guest');
route::post('/ceklogin','LoginController@cekLogin')->name('ceklogin')->middleware('guest');
route::get('/logout','LoginAuthController@logoutLogin')->name('logout');

route::get('/dashboard','LoginController@dashboard')->name('dashboard')->middleware('auth');*/

