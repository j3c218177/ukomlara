<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'admin\PageController@index');

Route::get('/multimedia', 'admin\PageController@multimedia');

Route::get('/database', 'admin\PageController@database');

Route::get('/statistics', 'admin\PageController@statistics');

Route::get('/pageform', 'admin\PageController@pageform');
route::post("/processform","admin\PageController@processForm");