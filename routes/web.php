<?php
Route::get('/', 'WelcomeController@index')->name('home');
Route::get('/about', function() { return view('pages.about'); });
Route::get('/directions', function() { return view('pages.directions'); });
Route::get('/messages', 'VideoController@index');
Route::get('/messages/{message}', 'VideoController@show');
Route::get('/series', 'SeriesController@index');
Route::get('/series/{series}', 'SeriesController@show');
Route::get('/news', 'NewsController@index');
Route::get('/bulletins', 'BulletinController@index');
Route::get('/album', 'AlbumController@index');
Route::get('/album/{album}', 'AlbumController@show');
Route::get('/support', function() { return view('pages.support'); });
Route::get('/test', 'VideoCronTestController@test');