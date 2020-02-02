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
    //return view('welcome');
    return view('landing');
});
Route::get('/sample', 'TestController@samplepage');
Route::get('/layout/app/{id?}/{name?}', 'TestController@samplepage2');
Route::get('/survey/list', 'SurveyController@_surveyList');
Route::post('/survey/save', 'SurveyController@_saveSurvey');
Route::get('layout/app-admin', 'TestController@showAppAdmin');
Route::get('test', function () {
    return view('welcome', ['title' => 'Vue Laravel App']);
});
Route::get('sample', function () {
    return view('modules/dashboard/dashboard', ['title' => 'Vue Laravel App']);
});

Route::post('/test-api-call', 'MainController@_testApiCall');
Route::get('miko', 'MainController@_miko');
Route::get('single', 'MainController@_miko');

