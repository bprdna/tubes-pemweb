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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//debugging
Route::view('/seminar', 'post.post');
Route::get('/admin', 'SeminarController@index');
Route::get('/admin/create', 'SeminarController@create');
Route::post('/admin/store', 'SeminarController@store');
Route::get('/admin/edit/{id}', 'SeminarController@edit');
Route::put('/admin/update/{id}', 'SeminarController@update');
Route::get('/admin/destroy/{id}', 'SeminarController@destroy');
Route::get('/anggota', 'SuController@index');
Route::get('/home/daftar/{id}', 'HomeController@daftar');
