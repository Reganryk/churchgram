<?php

/*
----------------------------------------------------------------------
user routes start here
----------------------------------------------------------------------

*/

/*
-----------------------------------------------------------------------
User Timelin
-----------------------------------------------------------------------
*/
Route::get('/welcome-to-chuchgram/', 'HomeController@welcomeuser')->name('welcomeuser');

Route::get('/timeline/', 'HomeController@timeline')->name('timeline');

Route::post('loadmoredata','HomeController@loadmoredata');
//posts
Route::get('/create-post/', 'user\PostsController@createpost')->name('createpost');
Route::Post('/store-post/', 'user\PostsController@storepost')->name('storepost');
Route::Post('/posts/Report-Post', 'user\PostsController@reportpost')->name('reportpost');
Route::match(['get', 'post'],'/posts/{id}/delete', 'user\PostsController@userdeletepost')->name('userdeletepost');
Route::match(['get', 'post'],'/posts/{id}/hide', 'user\PostsController@userhidepost')->name('userhidenpost');
Route::get('/get-posts/', 'user\PostsController@getsallposts')->name('getsallposts');

//comments
Route::Post('/store-comment/', 'user\PostsController@storecomment')->name('storecomment');

//Replies

//post like
Route::match(['get', 'post'],'/post/{id}/dislike', 'user\PostsController@postdislike')->name('userpostdislike');
Route::match(['get', 'post'],'/post/{id}/like', 'user\PostsController@postlike')->name('userpostlike');

//user friends
Route::match(['get', 'post'],'/twin-user/{uname}', 'user\ProfileController@usertwinuser')->name('usertwinuser');
Route::match(['get', 'post', 'delete'],'/untwin-user/{user_twin}', 'user\ProfileController@useruntwinuser')->name('useruntwinuser');

/*
-----------------------------------------------------------------------
profile
-----------------------------------------------------------------------
*/

Route::get('/finish/{uname}/', 'user\ProfileController@profile')->name('userprofile');
Route::get('/profile/{uname}/', 'user\ProfileController@userfinishedprofile')->name('userfinishedprofile');
Route::Post('profile/propic/', 'user\ProfileController@uploadpropic')->name('uploadavatar');
Route::Post('profile/banner/', 'user\ProfileController@uploadbanner')->name('uploadbanner');
Route::get('/gallery/{uname}/', 'user\ProfileController@gallery')->name('usergallery');
Route::get('/friends/{uname}/', 'user\ProfileController@friends')->name('userfriends');
Route::get('/history/{uname}/', 'user\ProfileController@history')->name('userhistory');
Route::Post('profile/card/', 'user\ProfileController@storecard')->name('storecard');
Route::get('/view/{id}/', 'user\ProfileController@userprofileview')->name('userprofileview');


/*
-----------------------------------------------------------------------
Alms
-----------------------------------------------------------------------
*/
Route::get('/alms-settings/', 'user\AlmsController@useralmsettings')->name('useralmsettings');
Route::get('/alms/', 'user\AlmsController@useralms')->name('useralms');
Route::get('/quick-alms/', 'user\AlmsController@userquickalms')->name('userquickalms');
Route::get('/alms-payments/', 'user\AlmsController@useralmpayments')->name('useralmpayments');
Route::get('/alms-payment-details/', 'user\AlmsController@useralmpaymentdetails')->name('useralmpaymentdetails');

/*
-----------------------------------------------------------------------
Music
-----------------------------------------------------------------------
*/
Route::get('/all-music/', 'user\MusicController@allmusic')->name('allmusic');
Route::get('/all-music/{uname)}/', 'user\ChurchController@musicprofile')->name('user.musicprofile');
Route::get('/all-music/{id}/add-to-playlist', 'user\MusicController@addtrackstoplaylist')->name('addtrackstoplaylist');
Route::get('/all-music/{id}/album-tracks', 'user\MusicController@albumtracks')->name('user.albumtracks');
Route::get('/all-music/{uname}/play-list', 'user\MusicController@myplaylist')->name('user.playlist');
/*
-----------------------------------------------------------------------
church
-----------------------------------------------------------------------
*/
Route::get('/mychurches/', 'user\ChurchController@mychurches')->name('mychurches');
Route::get('/joinedchurches/', 'user\ChurchController@joinedchurches')->name('joinedchurches');
Route::get('/churches/', 'user\ChurchController@allchurches')->name('allchurches');
Route::get('/churches/{uname)}/details', 'user\ChurchController@churchprofile')->name('userchurchprofile');

//user create church routes
Route::get('/register-church/step1', 'user\ChurchController@registerchurch')->name('registerchurch');
Route::Post('/register-church/create1', 'user\ChurchController@usercreatechurch1')->name('usercreatechurch1');
Route::get('/register-church/{id}/create2', 'user\ChurchController@usercreatechurch2')->name('usercreatechurch2');
Route::Post('/register-church/{id}/create2', 'user\ChurchController@usercreatechurch2create')->name('usercreatechurch2create');


//user create musicroutes
Route::get('/register-music/step1', 'user\MusicController@registermusic')->name('registermusic');
Route::Post('/register-music/create1', 'user\MusicController@usercreatemusic1')->name('usercreatemusic1');
Route::get('/register-music/{id}/create2', 'user\MusicController@usercreatemusic2')->name('usercreatemusic2');
Route::Post('/register-music/{id}/create', 'user\MusicController@usercreatemusic2create')->name('usercreatemusic2create');
/*
-----------------------------------------------------------------------
Events
-----------------------------------------------------------------------
*/




/*
-----------------------------------------------------------------------
Radio
-----------------------------------------------------------------------
*/

/*
-----------------------------------------------------------------------
Groups
-----------------------------------------------------------------------
*/

Route::get('/allgroups/', 'user\GroupController@mygroups')->name('all_hshsgroups');
Route::get('/joinedgroups/', 'user\GroupController@joinedgroups')->name('user.joinedgroups');
Route::get('/all-groups/', 'user\GroupController@allgroups')->name('allgroups');
Route::get('/all-groups/{id}/member', 'user\GroupController@groupmember')->name('user.groupmember');
Route::Post('/create-group/', 'user\GroupController@addgroup')->name('user.addgroup');
Route::get('/my-groups/{id}/admin', 'user\GroupController@groupadmin')->name('user.groupadmin');
//notifications
Route::get('/markAsRead', 'HomeController@markNotificationAsRead')->name('markNotificationAsRead');
