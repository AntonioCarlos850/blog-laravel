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
    Route::get('/','HomeController');

    Route::get('/post/{slug}','PostController');

    Route::view('sobre','site.about.index');

    Route::get('contato','ContactController@index');
    Route::post('contato','ContactController@send');
});
