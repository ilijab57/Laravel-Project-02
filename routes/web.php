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

// Route::get('/', 'HomeController@index');

Auth::routes();


Route::get('/', 'MainController@index')->name('home')->middleware('checkRole');
Route::get('/lessons/category/{id}','MainController@lessons');
Route::post('/register', 'MainController@register');

Route::get('/admin/login', 'AdminController@adminLoginForm');


Route::group(['middleware' => ['admin']],function(){


Route::get('/admin/home', 'AdminController@index')->name('admin.home');
Route::get('/admin/users','AdminController@usersList');


Route::get('/admin/categories','CategoriesController@index');
Route::get('/admin/categories/{id}/view','CategoriesController@show');
Route::get('/admin/categories/create','CategoriesController@create');
Route::post('/admin/categories/store','CategoriesController@store');
Route::get('/admin/categories/{id}/edit','CategoriesController@edit');
Route::put('/admin/categories/{id}/update','CategoriesController@update');
Route::delete('/admin/categories/{id}/delete','CategoriesController@destroy');


Route::get('/admin/lessons','LessonsController@index');
Route::get('/admin/lessons/create','LessonsController@create');
Route::post('/admin/lessons/store','LessonsController@store');
Route::get('/admin/lessons/{id}/view','LessonsController@show');
Route::get('/admin/lessons/{id}/edit','LessonsController@edit');
Route::put('/admin/lessons/{id}/update','LessonsController@update');
Route::delete('/admin/lessons/{id}/delete','LessonsController@destroy');

Route::get('/admin/banners', 'BannerController@index')->name('bannerList');
Route::get('/admin/banners/{id}/view','BannerController@show');
Route::get('/admin/banners/create', 'BannerController@create');
Route::post('/admin/banners/store','BannerController@store');
Route::get('/admin/banners/{id}/edit','BannerController@edit');
Route::put('/admin/banners/{id}/update','BannerController@update');
Route::delete('/admin/banners/{id}/delete','BannerController@destroy');
});