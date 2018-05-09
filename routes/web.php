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
    Route::get('associate', 'academicController@associate');  // route : academic/associate
    Route::get('bachelor', 'academicController@bachelor');  // route : academic/bachelor
    Route::get('master', 'academicController@master');  // route : academic/master
    Route::get('master', 'academicController@master');  // route : academic/master
    
});
// end academic route


Route::get('/internship','internshipController@internship');// route : Internship
Route::get('/facilites','facilitesController@facilites');// route : Facilites
Route::get('/structure','structureController@structure');// route : Structure
Route::get('/about','aboutController@about');// route : About US

Route::get('/it/pro/c', 'itController@cprogramming');  // route : academic/bridging

Route::get('/ITLearning','ITLearningController@ITLearning');
Route::get('/academic/bachelor/mis','academicController@mis');
Route::get('/academic/bachelor/design','academicController@design');
Route::post('/postdata','categoryController@insertToCategory');
Route::get('/category','categoryController@showCategory');




Route::prefix('/admin')->group(function () 
{
    Route::get('dashboard', 'adminController@dashboard');

    Route::get('news-add', 'adminNewsController@addnews');
    Route::get('news-view','adminNewsController@viewnews');

    Route::get('academic-associate', 'adminAcademicController@associate');
    Route::get('academic-bachelor', 'adminAcademicController@bachelor');
    Route::get('academic-master', 'adminAcademicController@master');

    Route::get('itlearn-programing', 'adminITlearnController@programing');
    Route::get('itlearn-network', 'adminITlearnController@network');
    Route::get('itlearn-design', 'adminITlearnController@design');

    Route::get('activitis', 'adminActiveController@activitis');

    Route::get('adduser', 'adminUserController@adduser');

    Route::get('settings', 'adminSettingController@setting');
    
    
});
Route::get('logout', 'adminUserController@logout');
Route::get('admin', 'adminUserController@logout');