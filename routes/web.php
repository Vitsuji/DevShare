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

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('user/{id}', ['as' => 'user.index', 'uses' => 'ProfileController@index'])->where('id', '^\d$');
Route::get('user/{id}/edit', ['as' => 'user.edit', 'uses' => 'ProfileController@edit'])->where('id', '^\d$');
Route::put('user/{id}/', ['as' => 'user.update', 'uses' => 'ProfileController@update'])->where('id', '^\d+$');

