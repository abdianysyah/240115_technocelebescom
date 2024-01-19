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

Route::get('/home', 'Homespace\HomeController@index')->name('home');
Route::get('/admin', 'Homespace\AdminController@admin')->name('admin');
Route::get('/article', 'Homespace\ArticleController@artikel')->name('article');
Route::get('/contact', 'Homespace\HomeController@contact')->name('contact');
Route::get('/profile', 'Homespace\HomeController@profile')->name('profile');
Route::get('/service', 'Homespace\HomeController@service')->name('service');
Route::get('/about', 'Homespace\HomeController@about')->name('about');
Route::get('/visi_misi', 'Homespace\HomeController@visi_misi')->name('visi_misi');



Route::post('create-article','ArticleController@create_article')->name('create-article');
