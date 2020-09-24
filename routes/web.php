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

Route::get('/', 'Front\FrontController@getIndex')->name('beranda');

Route::get('/divisi/{anggota}', 'Front\FrontController@show')->name('anggota.detail');

Route::get('/divisi-hmp/{jabats}', 'Front\FrontController@anggota_jabatan')->name('anggota.jabatan');
// Route::get('/admin/index', function () {
//   return view('admin.index');
// });

// Route::get('/admin', function () {
//   return redirect()->route('login');
// });

// Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('/admin/login', 'Auth\LoginController@login');
// Route::post('/admin/logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('/admin/register', [
//   'as' => 'register',
//   'uses' => 'Auth\RegisterController@showRegistrationForm'
// ]);
Auth::routes();


Route::group(['middleware' => ['auth']], function () {
  Route::get('/admin/dashboard', 'HomeController@index')->name('home');

  Route::resource('admin/pengurus', 'PengurusController');

  Route::resource('admin/anggota', 'AnggotaController');

  Route::resource('admin/gallery', 'GalleriController');
});


// admin
