<?php

use App\User;
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

Route::middleware('auth:api')->get('user', function (Request $request) {
    $user = $request->user()->with('roles')->where('email','=', $request->user()->email)->get();
    return response(['data' => $user],200);
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
    Route::post('user-list', 'UserController@getUserList');
    Route::get('get-sharper-details','AdminController@getDetails');
    Route::get('users-list','AdminController@getAllUsers');
    Route::post('add-project', 'ProjectController@store');
    Route::get('get-user-projects', 'UserController@getUserProjects');
    Route::post('add-feedback','FeedbackController@addFeedback');
});

Route::group(['prefix' => 'v1', 'middleware' => 'api'], function () {
    Route::post('create-user','UserController@createUser');
    Route::get('projects-list', 'ProjectController@index');
    Route::get('project/{project}','ProjectController@show');
    Route::post('contact-us','ContactController@getMessage');
});
/**
 * Password reset routes
 */
Route::post('forgot-password', 'UserController@forgotPassword');
Route::post('reset-password', 'UserController@resetPassword');
