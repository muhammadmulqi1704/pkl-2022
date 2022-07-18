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

Route::get('halaman-2', function () {
    return ('halaman-2');
});

Route::get('halaman-3', function () {
    return ('halaman-3');
});

Route::get('halaman-3 /{nama} / jenis-kelamin /{jk}', function ($nama,$jk) {
    return ('halaman profile ' .$nama.' dengan '.' jenis kelamin : '.$jk);
});

Route::get('halaman-profile/{nama?}', function ($nama = ' belum ada nama ') {
    return (' profile ' .$nama);
});

//latihan
// Route::get('profile', function () {
//     return view('profile');
// });

// Route::get('about/{nama}', function ($nama) {
//     $calculator = 1 + 5;
//     return view('about', compact('nama','calculator'));
    
// });

Route::get('pesan/{nama?}', function ($nama = "tidak ada") {
    return view('pesan', compact('nama'));
    
});


//latihan
Route::get('pemesanan/{a?}/{b?}/{c?}', function ($a = "silahkan masukan pesanan",$b = null , $c = null) {
    return view('pemesanan', compact('a','b','c'));
    
});

Route::get('hallo','ContohController@hallo') ;
Route::get('profile','ContohController@profile') ;
Route::get('facebook/{perkalian}','ContohController@facebook') ;
Route::get('siswa','ContohController@siswa') ;
Route::get('berat_badan/{tinggi}/{berat}/{umur}','ContohController@berat_badan') ;
Route::get('kampus','ContohController@kampus') ;
Route::get('latihan','ContohController@latihan') ;
Route::get('nilai','ContohController@nilai') ;
Route::get('belanja','ContohController@belanja') ;

//tampilan siswa
Route::get('siswa','SiswaController@tampil') ;
