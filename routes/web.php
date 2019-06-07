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

Route::get('/', 'StaticPagesController@home');
Route::get('/help', 'StaticPagesController@help');
Route::get('/about', 'StaticPagesController@about');
Route::get('/test', 'StaticPagesController@test');
