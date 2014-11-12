<?php

Route::get('/', array('uses' => 'HomeController@getHome'));

// registration
Route::get('register', array('uses' => 'UserController@getRegister'));
Route::post('register', array('uses' => 'UserController@postCreate'));

// user authentication
Route::get('login', array('uses' => 'UserController@getLogin'));
Route::post('login', array('uses' => 'UserController@postLogin'));