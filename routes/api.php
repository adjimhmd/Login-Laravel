<?php

Route::group(['prefix' => 'auth'], function ($router) {
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout');
    Route::post('refresh', 'LoginController@refresh');
    Route::post('me', 'LoginController@me');
});

Route::group(['prefix' => 'authadmin'], function ($router) {
    Route::post('login', 'AdminLoginController@login');
    Route::post('logout', 'AdminLoginController@logout');
    Route::post('refresh', 'AdminLoginController@refresh');
    Route::post('me', 'AdminLoginController@me');
});