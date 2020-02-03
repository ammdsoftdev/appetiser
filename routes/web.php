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
    //return view('landing');
    return view('modules/dashboard/dashboard', ['title' => 'Appetiser']);
});
Route::post('/save_event', 'AppetiserController@_saveEvent');
/*Route::get('/sample', 'TestController@samplepage');
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

Route::get('elbert', function() {
    return view('modules/miko-test/elbert-test', ['title' => 'Elber Page']);
});

Route::get('appetiser', function () {
    return view('modules/appetiser/appetiser', ['title' => 'Appetiser']);
});

Route::get('appetiser-app', 'AppetiserController@__appetiserApp');*/

