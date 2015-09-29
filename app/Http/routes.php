<?php

get('/', 'AuthController@index');

get('project', 'ProjectController@index');

get('server', 'ServerController@index');
