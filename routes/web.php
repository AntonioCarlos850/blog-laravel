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

    /*=========================Login=====================*/
    Route::get('login','UserController@login')->name('login');
    Route::post('login','UserController@authenticate')->name('authenticate');
    Route::get('logout','UserController@logout')->name('logout');

    /*=========================Painel=====================*/
    Route::get('/painel','PanelController')->name('painel')->middleware('auth');

    Route::get('/painel/posts','PostController@panelIndex')->name('post.index')->middleware('auth');
    Route::get('/painel/categories','CategoryController@panelIndex')->name('category.index')->middleware('auth');
    Route::get('/painel/tags','TagController@panelIndex')->name('tag.index')->middleware('auth');

    /*=========================Post=====================*/
    Route::get('/painel/post/{id}','PostController@editPage')->name('post.edit')->middleware('auth');
    Route::post('/painel/post/{id}','PostController@edit')->name('post.form')->middleware('auth');
    Route::get('/painel/delete/post/{id}','PostController@delete')->name('post.delete')->middleware('auth');
    Route::get('/painel/new/post','PostController@create')->name('post.create')->middleware('auth');

    /*=========================Category=====================*/
    Route::get('/painel/category/{id}','CategoryController@editPage')->name('category.edit')->middleware('auth');
    Route::post('/painel/category/{id}','CategoryController@edit')->name('category.form')->middleware('auth');
    Route::get('/painel/delete/category/{id}','CategoryController@delete')->name('category.delete')->middleware('auth');
    Route::get('/painel/new/category','CategoryController@create')->name('category.create')->middleware('auth');

     /*=========================Tag=====================*/
    Route::get('/painel/tag/{id}','TagController@editPage')->name('tag.edit')->middleware('auth');
    Route::post('/painel/tag/{id}','TagController@edit')->name('tag.form')->middleware('auth');
    Route::get('/painel/delete/tag/{id}','TagController@delete')->name('tag.delete')->middleware('auth');
    Route::get('/painel/new/tag','TagController@create')->name('tag.create')->middleware('auth');
});
