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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'PagesController@getIndex')->name('main');
Route::get('/1follow2', 'UserRelationshipController@userOneFollowsTwo');
Route::get('/2getfollowers', 'UserRelationshipController@getUserTwoFollowers');
Route::resource('projects','ProjectsController');
