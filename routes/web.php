<?php

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

Route::get('/', 'PagesController@index')->name('index');
Route::post('/enviar-contato', 'PagesController@sendContact')->name('sendContact');

Auth::routes();
Route::prefix('admin')->group(function () {
    Route::resource('contacts', 'Admin\ContactsController', ['only' => ['index', 'show']]);
    Route::delete('/{contact?}', 'Admin\ContactsController@destroy')->name('destroy');
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/', 'Admin\AdminsController@index')->name('home');
});
