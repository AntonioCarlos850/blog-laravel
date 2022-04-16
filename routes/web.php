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
Route::namespace('Site')->group(function() {
    Route::get('/','HomeController')->name('index');

    // Route::get('categorias','CategoryController')->name('category');

    Route::get('/post/{slug}','PostController@index')->name('post');

    Route::view('sobre','site.about.index')->name('about');

    Route::get('contato','ContactController@index')->name('contact');
    Route::post('contato','ContactController@create')->name('contact.form');

    Route::get('login','UserController@login')->name('login');
    Route::post('login','UserController@authenticate')->name('authenticate');
    Route::get('logout','UserController@logout')->name('logout');
    /*=========================PAINEL=====================*/

    Route::get('/painel','PanelController')->name('painel')->middleware('auth');

    Route::get('/painel/posts','PostController@panelIndex')->name('posts.panel')->middleware('auth');
    Route::get('/painel/categories','CategoryController@panelIndex')->name('category.panel')->middleware('auth');
    Route::get('/painel/tags','TagController@panelIndex')->name('tag.panel')->middleware('auth');

    Route::get('/painel/post/{slug}','PostController@panelPost')->name('post.panel')->middleware('auth');
});
