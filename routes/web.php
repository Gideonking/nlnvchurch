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

Route::get('/', function () {
<<<<<<< HEAD
    return view('welcome');
=======
    $tasks = [
      'Go to the store',
      'Finish my screencase'
    ];

    return view('welcome', compact('tasks'));
>>>>>>> c619b251585e6d40dc0e82cca2c46d6bb65165c7
});
