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
    //Login Logout
    Route::get('/daftar', 'Auth\AuthController@getRegister');
    Route::get('/masuk', 'Auth\AuthController@getLogin');
    Route::post('/login', 'Auth\AuthController@login');
    Route::post('/register', 'Auth\AuthController@register');
    Route::post('/quick-register', 'Auth\AuthController@quick_register');
    
    Route::get('/', 'HomeController@beranda');
    Route::get('/beranda', 'HomeController@beranda');
    Route::get('/kursus', 'HomeController@kursus');
    Route::get('/kursus/{course_id}', 'HomeController@kursus-detil');
    Route::get('/tentangkami', 'HomeController@tentangkami');

    Route::group(['middleware' => 'auth'], function()
    {
      Route::get('/dashboard', 'DashboardController@dashboard';

      Route::get('/dashboard/profil', 'DashboardController@profil');

      Route::get('/dashboard/kursusku', 'DashboardController@kursusku');

      Route::get('/dashboard/kursusku/{course_id}', 'DashboardController@kursusku-detil');

      Route::get('/dashboard/kursusku/{course_id}/{lesson_title}', 'DashboardController@belajar');

      Route::get('/dashboard/penghargaan', 'DashboardController@penghargaan');

      Route::get('/keluar', 'Auth\AuthController@logout');
    });

    Route::group(['middleware' => 'admin'], function()
    {
      Route::get('/admin-dashboard/', 'AdminController@dashboard');
    });
});
