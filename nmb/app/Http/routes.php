<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get("/board", "RenderController@board");

Route::group(["prefix" => "api/v1"], function(){
    Route::resource('/posts', 'api\v1\PostController');
    Route::resource('/boards', 'api\v1\BoardController');
    Route::resource('/reports', 'api\v1\ReportController');
});
