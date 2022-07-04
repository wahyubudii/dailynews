<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin;
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
    return view('welcome');
});

Route::get('/',[
   'uses'  => 'App\Http\Controllers\UserController@index',
   'as'    =>  'user'
]);

Route::get('/admin',[
   'uses'  => 'App\Http\Controllers\DashboardController@index',
   'as'    =>  'dashboard'
]);

// Admin | Kategori
Route::get('/admin/category',[
   'uses'  => 'App\Http\Controllers\CategoryController@index',
   'as'    =>  'category'
]);
Route::get('/admin/category/add',[
   'uses'  => 'App\Http\Controllers\CategoryController@add',
   'as'    =>  'add-category'
]);
Route::post('/new-category',[
   'uses'  => 'App\Http\Controllers\CategoryController@store',
   'as'    =>  'new-category'
]);
Route::get('/admin/category/edit/{id}',[
   'uses'  => 'App\Http\Controllers\CategoryController@edit',
   'as'    =>  'edit-category'
]);
Route::post('/update-category',[
   'uses'  => 'App\Http\Controllers\CategoryController@update',
   'as'    =>  'update-category'
]);
Route::get('/admin/category/delete/{id}',[
   'uses'  => 'App\Http\Controllers\CategoryController@destroy',
   'as'    =>  'delete-category'
]);

// Admin | News
Route::get('/admin/news',[
   'uses'  => 'App\Http\Controllers\NewsController@index',
   'as'    =>  'news'
]);
Route::get('/admin/news/add',[
   'uses'  => 'App\Http\Controllers\NewsController@add',
   'as'    =>  'add-news'
]);
Route::post('/new-news',[
   'uses'  => 'App\Http\Controllers\NewsController@store',
   'as'    =>  'new-news'
]);
Route::get('/admin/news/edit/{id}',[
   'uses'  => 'App\Http\Controllers\NewsController@edit',
   'as'    =>  'edit-news'
]);
Route::post('/update-news',[
   'uses'  => 'App\Http\Controllers\NewsController@update',
   'as'    =>  'update-news'
]);
Route::get('/admin/news/delete/{id}',[
   'uses'  => 'App\Http\Controllers\NewsController@destroy',
   'as'    =>  'delete-news'
]);