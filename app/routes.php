<?php

Route::get('/', array('uses' => 'HomeController@getHome'));

// registration
Route::get('register', array('uses' => 'UserController@getRegister'));
Route::post('register', array('uses' => 'UserController@postCreate'));

// user authentication
Route::get('login', array('uses' => 'UserController@getLogin'));
Route::post('login', array('uses' => 'UserController@postLogin'));

/**
 * Require the user to be logged in for the following routes
 */
Route::group(array('before' => 'auth'), function()
{
    // view schedules
    Route::get('/schedules/view/{id}', array('uses' => 'ScheduleController@getView'));

    // create a schedule
    Route::post('/schedules/new', array('uses' => 'ScheduleController@postCreate'));

});