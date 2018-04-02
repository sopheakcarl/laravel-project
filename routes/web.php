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
    Route::get('bachelor', 'academicController@bachelor');  // route : academic/bachelor
    Route::get('master', 'academicController@master');  // route : academic/master
    Route::get('bridging', 'academicController@bridging');  // route : academic/bridging
    
});
// end academic route


Route::get('/internship','internshipController@internship');// route : Internship
Route::get('/facilites','facilitesController@facilites');// route : Facilites
Route::get('/structure','structureController@structure');// route : Structure
Route::get('/about','aboutController@about');// route : About US