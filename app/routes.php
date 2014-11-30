<?php

Route::get('/', array('uses' => 'HomeController@getIndex'));

// registration
Route::get('register', array('uses' => 'UserController@getRegister'));
Route::post('register', array('uses' => 'UserController@postCreate'));

// user authentication
Route::get('login', array('uses' => 'UserController@getLogin'));
Route::post('login', array('uses' => 'UserController@postLogin'));

Route::get('logout', array('uses' => 'UserController@getLogout'));



/**
 * Require the user to be logged in for the following routes
 */
Route::group(array('before' => 'auth'), function()
{
    // home
    Route::get('/home',array('uses' => 'HomeController@getHome'));


    // schedules
    Route::get('/schedules/all', array('uses' => 'ScheduleController@getAll'));
    Route::get('/schedules/view/{id}', array('uses' => 'ScheduleController@getView'));
    Route::post('/schedules/new', array('uses' => 'ScheduleController@postCreate'));

    // activities
    Route::get('/schedules/activities/new', array('uses' => 'ActivityController@getCreate'));
    Route::post('/schedules/activities/new', array('uses' => 'ActivityController@postCreate'));
    Route::post('/schedules/{scheduleId}/activities/{activityId}/add',
        array('uses' => 'ActivityController@postAdd'));
    Route::get('/schedules/{scheduleId}/activities/{activityId}/remove',
        array('uses' => 'ActivityController@getRemove'));

    // classes
    Route::get('/schedules/classes/new', array('uses' => 'ClassController@getCreate'));
    Route::post('/schedules/classes/new', array('uses' => 'ClassController@postCreate'));
    Route::post('/schedules/{scheduleId}/classes/{classId}/add',
        array('uses' => 'ClassController@postAdd'));
    Route::get('/schedules/{scheduleId}/classes/{classId}/remove',
        array('uses' => 'ClassController@getRemove'));

    // sports
    Route::get('/schedules/sports/new', array('uses' => 'SportController@getCreate'));
    Route::post('/schedules/sports/new', array('uses' => 'SportController@postCreate'));
    Route::post('/schedules/{scheduleId}/sports/{sportId}/add',
        array('uses' => 'SportController@postAdd'));
    Route::post('/schedules/{scheduleId}/sports/{sportId}/remove',
        array('uses' => 'SportController@getRemove'));
});
