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
    return view('home.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@admin')->name('admin');
Route::get('/article', 'ArticleController@artikel')->name('article');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/service', 'HomeController@service')->name('service');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/visi_misi', 'HomeController@visi_misi')->name('visi_misi');