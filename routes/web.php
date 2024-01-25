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
Auth::routes();

Route::get('/', function () {
    return view('home.home');
});


Route::get('/home', 'Homespace\HomeController@index')->name('home');
Route::get('/article', 'Homespace\HomeController@article')->name('article');
Route::get('/article-single/{article_id}', 'Homespace\HomeController@article_single')->name('article-single');
Route::get('/contact', 'Homespace\HomeController@contact')->name('contact');
Route::get('/profile', 'Homespace\HomeController@profile')->name('profile');
Route::get('/service', 'Homespace\HomeController@service')->name('service');
Route::get('/about', 'Homespace\HomeController@about')->name('about');
Route::get('/visi_misi', 'Homespace\HomeController@visi_misi')->name('visi_misi');



Route::prefix('admin')->group(function () {
    Route::get('/dashboard', "AdminSpace\AdminController@index")->name("dashboard");

	Route::prefix('article')->group(function () {
	    Route::get('/list', "AdminSpace\ArticleController@view_list")->name("article-list");
	    Route::get('/create', "AdminSpace\ArticleController@view_create")->name("create-article");
	    Route::get('/update/{article_id}', "AdminSpace\ArticleController@view_update")->name("update-article");

	    Route::get('/list-a', "AdminSpace\ArticleController@post_list")->name("delete-article-post");
	    // Route::post('/list', "AdminSpace\ArticleController@post_list")->name("delete-article-post");
	    Route::post('/delete', "AdminSpace\ArticleController@post_delete")->name("delete-article-post");
	    Route::post('/create', "AdminSpace\ArticleController@post_create")->name("create-article-post");
	    Route::post('/update', "AdminSpace\ArticleController@post_update")->name("update-article-post");
	});

	Route::prefix('portofolio')->group(function () {
	    Route::get('/list', "AdminSpace\PortofolioController@view_list")->name("portofolio-list");
	    Route::get('/create', "AdminSpace\PortofolioController@view_create")->name("create-portofolio");
	    Route::get('/update', "AdminSpace\PortofolioController@view_update")->name("create-portofolio");

	    Route::post('/delete', "AdminSpace\PortofolioController@post_delete")->name("delete-portofolio-post");
	    Route::post('/create', "AdminSpace\PortofolioController@post_create")->name("create-portofolio-post");
	    Route::post('/update', "AdminSpace\PortofolioController@post_update")->name("update-portofolio-post");
	});
});

Route::post('create-article', 'ArticleController@create_article')->name('create-article');