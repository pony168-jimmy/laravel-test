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
| 这里是您可以为您的应用程序注册web路由的地方。方法加载这些路由
| 包含“web”中间件组的组中的 RouteServiceProvider。现在创造一些伟大的东西!
|
*/
//StaticPageController
Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');
Route::get('/test', 'StaticPagesController@test')->name('test');

//Redis Test
Route::get('/redis_test', 'RedisTestController@test')->name('redis_test');

//UsersController
Route::get('signup', 'UsersController@create')->name('signup');

/**
 * resource 的總路徑
 * Route::get('/users', 'UsersController@index')->name('users.index');
 * Route::get('/users/create', 'UsersController@create')->name('users.create');
 * Route::get('/users/{user}', 'UsersController@show')->name('users.show');
 * Route::post('/users', 'UsersController@store')->name('users.store');
 * Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
 * Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
 * Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');
 */
// Route::resource('users','UsersController');
Route::get('/users/{user}', 'UsersController@show')->name('users.show');


// VocabularyController
Route::get('/vocabulary/{id?}','VocabularyController@show');
