<?php

Route::get('/', array('uses' => 'HomeController@getHome'));

Route::get('register', array('uses' => 'UserController@getRegister'));
Route::post('register', array('uses' => 'UserController@postCreate'));
