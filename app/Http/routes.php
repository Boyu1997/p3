<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'MasterController@getHome');

    Route::get('/text', 'MasterController@getText');
    Route::post('/text', 'MasterController@postText');
    
    Route::get('/user', 'MasterController@getUser');
    Route::get('/user', 'MasterController@postUser');
});
