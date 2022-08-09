<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('frontend.index');
})->name('beranda');


Route::get('/blog', 'PostController@index')->name('blog.index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes([
    'register' => true,
    'reset' => false,
    'verify' =>false,
]);

Route::get('/logout', 'Auth\LoginController@logout')->name('logout1');

Route::get('/home', 'HomeController@index')->name('home');

// User Routes

Route::get('/daftarwarga', 'DaftarWargaController@index')->name('daftarwarga.index');

Route::get('/daftarwarga/create', 'DaftarWargaController@create')->name('daftarwarga.create');

Route::post('/daftarwarga', 'DaftarWargaController@store')->name('daftarwarga.store');

Route::get('/daftarwarga/{id}', 'DaftarWargaController@destroy')->name('daftarwarga.destroy');

// Admin Routes

Route::get('/daftaradmin', 'DaftarAdminController@index')->name('manage-admin.index');

// Post Routes

Route::get('/managepost', 'PostManageController@index')->name('managepost.index');

Route::get('/managepost/create', 'PostManageController@create')->name('managepost.create');

Route::post('/managepost', 'PostManageController@store')->name('managepost.store');

Route::get('/managepost/{id}', 'PostManageController@destroy')->name('managepost.destroy');