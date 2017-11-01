<?php
Route::get('/', 'WelcomeController@index')->name('home');
Route::get('/about', function() { return view('pages.about'); });
Route::get('/directions', function() { return view('pages.directions'); });
Route::get('/messages', 'VideoController@show');
Route::get('/series', 'SeriesController@index');
Route::get('/series/{series}', 'SeriesController@show');
Route::get('/album', 'AlbumController@index');
Route::get('/support', function() { return view('pages.support'); });

Route::get('/test', 'VideoController@store'); // For cron job later

// Route::get('/home', 'PostController@index')->name('home');
// Route::get('/posts/create', 'PostController@create');
// Route::post('/posts', 'PostController@store');
// Route::get('/posts/{post}', 'PostController@show');
//
// Route::post('/posts/{post}/comments', 'CommentController@store');
//
// Route::get('/posts/tags/{tag}', 'TagController@index');
//
// Route::get('/register', 'RegistrationController@create');
// Route::post('/register', 'RegistrationController@store');
//
// Route::get('/login', 'SessionController@create')->name('login');
// Route::post('/login', 'SessionController@store');
// Route::get('/logout', 'SessionController@destroy');
