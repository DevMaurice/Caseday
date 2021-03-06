<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
$router->model('court', 'App\Court');

Route::get('/', function () {
    return view('app');
});
Route::get('/home', function () {
    return view('app');
});
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


$router->group(['middleware' => 'auth', 'namespace' => 'Admin'], function($router) {
	$router->resource('court', 'CourtController');
	$router->resource('mention', 'CaseController');

});