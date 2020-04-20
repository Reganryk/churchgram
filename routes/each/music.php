<?php


Route::get('/login', 'Auth\MusicLoginController@showLoginForm')->name('music.login');

Route::post('/login', 'Auth\MusicLoginController@login')->name('music.login.submit');

Route::get('/', 'MusicController@index')->name('music.dashboard');

Route::get('/logout', 'Auth\MusicLoginController@logout')->name('music.logout');

// Password reset routes
Route::post('/password/email', 'Auth\MusicForgotPasswordController@sendResetLinkEmail')->name('music.password.email');
Route::get('/password/reset', 'Auth\MusicForgotPasswordController@showLinkRequestForm')->name('music.password.request');
Route::post('/password/reset', 'Auth\MusicResetPasswordController@reset');
Route::get('/password/reset/{token}', 'Auth\MusicResetPasswordController@showResetForm')->name('music.password.reset');



//music Manager
Route::get('/all-my-albums/', 'music\AlbumController@musicalbums')->name('music.musicalbums');

Route::get('/all-my-albums/{id}/details', 'music\AlbumController@musicalbumdetails')->name('music.musicalbumdetails');
Route::Post('/all-my-albums/createtrack', 'music\AlbumController@createtrack')->name('music.createtrack');
Route::Post('/all-my-albums/createalbum', 'music\AlbumController@createalbum')->name('music.createalbum');
