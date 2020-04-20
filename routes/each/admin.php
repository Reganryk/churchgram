<?php

Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminController@index')->name('admin.dashboard');
Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

// Password reset routes
Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');



//churches
Route::get('/churchreg-requests', 'admin\ChurchController@churchregrequests')->name('admin.churchregrequests');
Route::get('/churchreg-requests/{id}/details', 'admin\ChurchController@churchregdetails')->name('admin.churchregdetails');

Route::match(['get', 'post'],'/churchreg-requests/{id}/aprrove', 'admin\ChurchController@churchregapprove')->name('admin.churchregrequestsapprove');


//music
Route::get('/musicreg-requests', 'admin\MusicController@musicregrequests')->name('admin.musicregrequests');
Route::get('/musicreg-requests/{id}/details', 'admin\MusicController@musicregdetails')->name('admin.musicregdetails');

Route::match(['get', 'post'],'/musicreg-requests/{id}/aprrove', 'admin\MusicController@musicregapprove')->name('admin.musicregrequestsapprove');
