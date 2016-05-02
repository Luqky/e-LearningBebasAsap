<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {
    Route::auth();



    Route::post('/quick-register', 'Auth\AuthController@quick_register');

    Route::get('/', 'HomeController@beranda');
    Route::get('/kursus', 'HomeController@kursus');
    Route::get('/kami', 'HomeController@kami');

    Route::group(['middleware' => 'auth'], function()
    {
      Route::get('/dashboard', function() {
        return view('user.index');
      });
    });

    Route::group(['middleware' => 'admin'], function()
    {
      Route::get('/admin', function() {
        return views('administrator.index');
      });
    });
});
