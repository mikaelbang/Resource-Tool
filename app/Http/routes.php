<?php

Route::get('/', function () {
    return view('index');
});

get('/', 'AuthController@index');

get('project', 'ProjectController@index');

get('server', 'ServerController@index');

get('/', 'AuthController@index');