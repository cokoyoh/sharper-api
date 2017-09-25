<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user()->with('roles')->first();
});

Route::get('test', function(){
    return response([
        "fname" => "charles",
        "lname" => "okoyoh",
        "email" => "charlesokoyoh@gmail.com",
        "api-name" => "sharper"
        ],200);
});

Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'] ,function (){
    Route::get('user-list', 'UserController@getUserList')->name('user-list');

});

Route::group(['prefix' => 'v1', 'middleware' => 'api'], function () {
    Route::post('create-user','UserController@createUser');
    Route::get('projects-list', 'ProjectController@index');
    Route::get('project/{project}','ProjectController@show');
    Route::post('add-project', 'ProjectController@store');
});



/**
 * Password reset routes
 */
Route::post('forgot-password', 'UserController@forgotPassword');
Route::post('reset-password', 'UserController@resetPassword');
