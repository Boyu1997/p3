<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'MasterController@getHome');
    Route::get('/text', 'MasterController@getText');
    Route::get('/user', 'MasterController@getUser');
});
