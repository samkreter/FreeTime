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
    // schedules
    Route::get('/schedules/view/{id}', array('uses' => 'ScheduleController@getView'));
    Route::post('/schedules/new', array('uses' => 'ScheduleController@postCreate'));

    // activities
    Route::get('/schedules/activities/new', array('uses' => 'ActivityController@getCreate'));
    Route::post('/schedules/activities/new', array('uses' => 'ActivityController@postCreate'));
    Route::post('/schedules/{scheduleId}/activities/{activityId}/add',
        array('uses' => 'ActivityController@postAdd'));

    // classes
    Route::get('/schedules/classes/new', array('uses' => 'ClassController@getCreate'));
    Route::post('/schedules/classes/new', array('uses' => 'ClassController@postCreate'));
    Route::post('/schedules/{scheduleId}/classes/{classId}/add',
        array('uses' => 'ClassController@postAdd'));

    // sports
    Route::get('/schedules/sports/new', array('uses' => 'SportController@getCreate'));
    Route::post('/schedules/sports/new', array('uses' => 'SportController@postCreate'));
    Route::post('/schedules/{scheduleId}/sports/{sportId}/add',
        array('uses' => 'SportController@postAdd'));
});