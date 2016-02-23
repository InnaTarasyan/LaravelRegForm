<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => ['web']], function () {

    Route::post('register_action', ['as' => 'register', 'uses' => 'RegisterController@store']);
    Route::post('login_action', ['as' => 'login', 'uses' => 'LoginController@loginCheck']);
    Route::get('register', function () {
        return view('register');
    });

    Route::get('login', function () {
        return view('login');
    });

    Route::get('home', function () {
        if(session('firstName')!=null) {
            return view('home');
        }
        else{
            return view('login');
        }
    });

    Route::get('logOut','LoginController@logOut');
});
