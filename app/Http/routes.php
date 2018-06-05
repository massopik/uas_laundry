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

// Route::auth();
Route::get('/', function () {
    return view('home');
});
Route::get('/home', 'HomeController@dashboard');
Route::get('/register', 'RegisterController@getRegister');
Route::post('postRegister','RegisterController@postRegister');
Route::get('/login', 'LoginController@getLogin');
Route::post('postLogin','LoginController@postLogin');
Route::get('logout','LoginController@logout');
// Route::get('logout',function(){
//     Auth::logout();
//     return redirect('/login');
// });
Route::get('/konsumen', 'KonsumenController@konsumen');
Route::get('/transaksi', 'TransaksiController@transaksi');
Route::get('/history', 'TransaksiController@history');
Route::post('postTransaksi','TransaksiController@postTransaksi');
Route::post('ubahStatus','TransaksiController@ubahStatus');

// Route::post('/transaksi/{id}/ubah', 'TransaksiController@ubah');
// Route::post('/transaksi/{id}/ubah', 'TransaksiController@ubah');