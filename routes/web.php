<?php

App::bind('App\Billing\Stripe', function () {
  return new \App\billing\Stripe(config('services.stripe.secret'));
});

$stripe = resolve('App\Billing\Stripe');
// $stripe = App::make('App\Billing\Stripe');

dd($stripe);

Route::get('/', 'PostController@index')->name('home');
Route::get('/home', 'PostController@index')->name('home');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts/{post}/comments', 'CommentController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionController@create')->name('login');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');
