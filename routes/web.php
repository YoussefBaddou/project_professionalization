<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/Visualisation','VisualisationController@index');
Route::post('/adddocs','VisualisationController@store')->name('adddocs');
Route::get('/displayfiles','VisualisationController@display');
Route::get('/editfile/{id}','VisualisationController@editfile');
Route::put('/updatefiles/{id}','VisualisationController@update');
Route::get('/Authentification','VisualisationController@Authentification');
Route::get('/Profile','VisualisationController@Profile');
