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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home','homeController@home');              // home route
// start academic route
Route::prefix('/academic')->group(function () 
{
    Route::get('foundation', 'academicController@foundation');  // route : academic/foundation
    Route::get('associate', 'academicController@associate');  // route : academic/associate
});
// end academic route
