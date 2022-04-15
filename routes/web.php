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

    /*=========================PAINEL=====================*/

    Route::get('/painel','PanelController')->name('painel');

    Route::get('/painel/posts','PostController@panelIndex')->name('posts.panel');
    Route::get('/painel/categories','CategoryController@panelIndex')->name('category.panel');
    Route::get('/painel/tags','TagController@panelIndex')->name('tag.panel');

    Route::get('/painel/post/{slug}','PostController@panelPost')->name('post.panel');
});
