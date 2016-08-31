<?php

Route::get('/', '\App\Http\Controllers\TasksController@index');
Route::post('/task', '\App\Http\Controllers\TasksController@store');
