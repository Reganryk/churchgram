<?php

Route::get('/', 'ChurchController@index')->name('church.dashboard');
Route::get('/login', 'Auth\ChurchLoginController@showLoginForm')->name('church.login');
Route::post('/login', 'Auth\ChurchLoginController@login')->name('church.login.submit');

Route::get('/logout', 'Auth\ChurchLoginController@logout')->name('church.logout');

// Password reset routes
Route::post('/password/email', 'Auth\ChurchForgotPasswordController@sendResetLinkEmail')->name('church.password.email');
Route::get('/password/reset', 'Auth\ChurchForgotPasswordController@showLinkRequestForm')->name('church.password.request');
Route::post('/password/reset', 'Auth\ChurchResetPasswordController@reset');
Route::get('/password/reset/{token}', 'Auth\ChurchResetPasswordController@showResetForm')->name('church.password.reset');


//account
Route::get('/account/{uname}/', 'church\AccountController@churchaccount')->name('churchaccount');


//Alms
Route::get('/tithe', 'church\AlmController@tithe')->name('churchtithe');
Route::Post('/tithe/create-tithe-type', 'church\AlmController@createtithetype')->name('createtithetype');


//messages
Route::get('/messages', 'church\MsgController@churchmsgs')->name('churchmsgs');


//groups
Route::get('/groups', 'church\GroupController@churchgroups')->name('churchgroups');


//events
Route::get('/events', 'church\EventController@churchevents')->name('churchevents');


//radio
Route::get('/radio', 'church\RadioController@churchradio')->name('churchradio');

//tv
Route::get('/tv', 'church\TvController@churchtv')->name('churchtv');

//settings
Route::get('/account/settings', 'church\SettingsController@accountset')->name('churchaccountset');
Route::get('/groups/settings', 'church\SettingsController@groupset')->name('churchgroupsset');
Route::get('/events/settings', 'church\SettingsController@eventset')->name('churcheventsset');
Route::get('/radio/settings', 'church\SettingsController@radioset')->name('churchradioset');
Route::get('/tv/settings', 'church\SettingsController@tvset')->name('churchtvset');
Route::get('/alm/settings', 'church\SettingsController@almset')->name('churchalmset');
Route::get('/general/settings', 'church\SettingsController@generalset')->name('churchgeneralset');



