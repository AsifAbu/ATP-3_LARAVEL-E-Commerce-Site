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

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/restaurantshow', function () {
    return view('restaurant/restaurantshow');
});
Route::get('/restaurantshowdetail', function () {
    return view('restaurant/restaurantshowdetail');
});
Route::get('/profileown', function () {
    return view('profileown');
});
Route::get('/registration', function () {
    return view('registration');
});*/

Route::get('/', ['as'=>'index', 'uses'=>'HomeController@index']);

Route::get('/home', ['as'=>'index', 'uses'=>'HomeController@index']);

Route::get('/index', ['as'=>'index', 'uses'=>'HomeController@index']);

Route::get('/login', ['as'=>'login', 'uses'=>'LoginController@login']);

Route::post('/login', ['as'=>'login', 'uses'=>'LoginController@logcheck']);

Route::get('/registration', ['as'=>'registration', 'uses'=>'RegistrationController@registration']);

Route::post('/registration', ['as'=>'registration', 'uses'=>'RegistrationController@registrationcheck']);

Route::get('/restaurantshow', ['as'=>'restaurant.restaurantshow', 'uses'=>'HomeController@restaurantshow']);

Route::get('/restaurantshowdetail', ['as'=>'restaurant.restaurantshowdetail', 'uses'=>'HomeController@restaurantshowdetail']);

Route::get('/profileown', ['as'=>'profileown', 'uses'=>'HomeController@profileown']);

//Route::get('/restaurantshowdetail', ['as'=>'restaurant.restaurantshowdetail', 'uses'=>'HomeController@restaurantshowdetail']);

//Route::get('/restaurantshowdetail', ['as'=>'restaurant.restaurantshowdetail', 'uses'=>'HomeController@restaurantshowdetail']);