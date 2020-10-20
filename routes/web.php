<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/list', 'App\Http\Controllers\CrudController@list');
Route::post('/', 'App\Http\Controllers\CrudController@insert');
