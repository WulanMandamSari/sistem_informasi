<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

// Dashboard //
Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');

// Pengajar //
Route::get('/pengajar', 'PengajarController@index')->name('pengajar')->middleware('auth');
Route::get('/pengajar/create', 'PengajarController@create')->middleware('auth');
Route::post('/pengajar/store', 'PengajarController@store')->middleware('auth');
Route::get('/pengajar/edit/{id}', 'PengajarController@edit')->middleware('auth'); 
Route::put('/pengajar/update/{id}', 'PengajarController@update')->middleware('auth');
Route::get('/pengajar/destroy/{id}', 'PengajarController@destroy')->middleware('auth'); // kalo misalkan di fieldnya itu kode, tetep di routenya pake id // 
Route::get('/pengajar/show/{id}', 'PengajarController@show')->middleware('auth'); 

// Kelas //
Route::get('/kelas', 'KelasController@index')->name('kelas')->middleware('auth');
Route::get('/kelas/create', 'KelasController@create')->middleware('auth');
Route::post('/kelas/store', 'KelasController@store')->middleware('auth');
Route::get('/kelas/edit/{id}', 'KelasController@edit')->middleware('auth'); 
Route::put('/kelas/update/{id}', 'KelasController@update')->middleware('auth');
Route::get('/kelas/destroy/{id}', 'KelasController@destroy')->middleware('auth'); 
Route::get('/kelas/show/{id}', 'KelasController@show')->middleware('auth'); 

// Siswa // 
Route::get('/siswa', 'SiswaController@index')->name('siswa')->middleware('auth');
Route::get('/siswa/create', 'SiswaController@create')->middleware('auth');
Route::post('/siswa/store', 'SiswaController@store')->middleware('auth');
Route::get('/siswa/edit/{id}', 'SiswaController@edit')->middleware('auth'); 
Route::put('/siswa/update/{id}', 'SiswaController@update')->middleware('auth');
Route::get('/siswa/destroy/{id}', 'SiswaController@destroy')->middleware('auth'); 
Route::get('/siswa/show/{id}', 'SiswaController@show')->middleware('auth'); 

// Profile Sekolah //
Route::get('/profile', 'ProfileController@index')->name('profile')->middleware('auth');
Route::get('/profile/create', 'ProfileController@create')->middleware('auth');
Route::post('/profile/store', 'ProfileController@store')->middleware('auth');
Route::get('/profile/edit/{id}', 'ProfileController@edit')->middleware('auth'); 
Route::put('/profile/update/{id}', 'ProfileController@update')->middleware('auth');
Route::get('/profile/destroy/{id}', 'ProfileController@destroy')->middleware('auth'); 
Route::get('/profile/show/{id}', 'ProfileController@show')->middleware('auth'); 

// Login, Regis, //
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register'); 
Route::post('/register', [AuthController::class, 'registerStore'])->name('registerPost');
Route::post('/login', [AuthController::class, 'loginStore'])->name('loginPost');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Hak Akses // 
Route::group(['middleware' => ['auth', 'role:siswa']], function () {
});
Route::group(['middleware' => ['auth', 'role:admin']], function () {
});

Route::get('user_profile', 'UserprofileController@index')->name('user_profile')->middleware('auth');
// Route::get('/user_profile/edit/{id}','UserprofileController@edit');
Route::post('/user/store', 'UserprofileController@store')->middleware('auth');
Route::put('user_profile/{id}','UserprofileController@update')->middleware('auth');