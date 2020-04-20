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

Auth::routes();
Route::get('/', 'HomeController@welcome');
////user routes
Route::prefix('/user/')->group(__DIR__ . '/each/front.php');
Route::prefix('/church/')->group(__DIR__ . '/each/church.php');
Route::prefix('/music/')->group(__DIR__ . '/each/music.php');
Route::prefix('/admin/')->group(__DIR__ . '/each/admin.php');


