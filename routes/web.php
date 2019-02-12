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

Route::get('/', 'UtamaController@index')->name('utama');
Route::get('/companynews', 'UtamaController@news')->name('newss');
Route::get('/work', 'UtamaController@works')->name('works');
Route::get('/work/{id}/{created_at}/{workname}', 'UtamaController@more')->name('works.more');
Route::get('/work/{id}/{created_at}/{workname}', ['as' => 'work.show', 'uses' => 'UtamaController@show']);
Route::resource('workcontent', 'UtamaController');

Route::get('/about', 'UtamaController@abouts')->name('abouts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// START PAGES ROUTING
Route::get('/pages', 'PageController@index')->name('pages');
Route::get('/pages/add', 'PageController@create')->name('pages.create');
Route::post('/pages/add', 'PageController@store')->name('pages.store');
Route::get('/pages/update/{id}', 'PageController@edit')->name('edit.pages');
Route::patch('/pages/update/{id}', 'PageController@update')->name('update.pages');
// END PAGES ROUTING

// START SLIDER ROUTING
Route::get('/d/slider', 'SliderController@index')->name('slider');
Route::get('/c/slider/add', 'SliderController@create')->name('slider.create');
Route::post('/c/slider/add', 'SliderController@store')->name('slider.store');
Route::get('/u/slider/update/{id}', 'SliderController@edit')->name('edit.slider');
Route::patch('/u/slider/update/{id}', 'SliderController@update')->name('update.slider');
Route::delete('/d/slider/{slider}', 'SliderController@destroy')->name('slider.destroy');
// END SLIDER ROUTING

// START WORK ROUTING
Route::get('/d/work', 'WorkController@index')->name('work');
Route::get('/c/work/add', 'WorkController@create')->name('work.create');
Route::post('/c/work/add', 'WorkController@store')->name('work.store');
Route::get('/u/work/update/{id}', 'WorkController@edit')->name('edit.work');
Route::patch('/u/work/update/{id}', 'WorkController@update')->name('update.work');
Route::delete('/d/work/{work}', 'WorkController@destroy')->name('work.destroy');
//END WORK ROUTING

// START NEWS ROUTING
Route::get('/d/news', 'NewsController@index')->name('news');
Route::get('/c/news/add', 'NewsController@create')->name('news.create');
Route::post('/c/news/add', 'NewsController@store')->name('news.store');
Route::get('/u/news/update/{id}', 'NewsController@edit')->name('edit.news');
Route::patch('/u/news/update/{id}', 'NewsController@update')->name('update.news');
Route::delete('/d/news/{news}', 'NewsController@destroy')->name('news.destroy');
//END NEWS ROUTING
