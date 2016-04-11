<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});


// $app->get('api/v1/book','App\Http\Controllers\BookController@index');
// $app->get('api/v1/book/{id}','App\Http\Controllers\BookController@getbook');
// $app->post('api/v1/book','App\Http\Controllers\BookController@createBook');
// $app->put('api/v1/book/{id}','App\Http\Controllers\BookController@updateBook');
// $app->delete('api/v1/book/{id}','App\Http\Controllers\BookController@deleteBook');



$app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
{
    $app->get('book','BookController@index');
  
    $app->get('book/{id}','BookController@getbook');
      
    $app->post('book','BookController@createBook');
      
    $app->put('book/{id}','BookController@updateBook');
      
    $app->delete('book/{id}','BookController@deleteBook');
});


// $app->get('api/v1/users','App\Http\Controllers\UserController@index');
// $app->get('api/v1/users/{id}','App\Http\Controllers\UserController@getUsers');
// $app->post('api/v1/users','App\Http\Controllers\UserController@createUsers');
// $app->put('api/v1/users/{id}','App\Http\Controllers\UserController@updateUsers');
// $app->delete('api/v1/users/{id}','App\Http\Controllers\UserController@deleteUsers');


$app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
{
    $app->get('user','UserController@index');
  
    $app->get('user/{id}','UserController@getUser');
      
    $app->post('user','UserController@createUser');
      
    $app->put('user/{id}','UserController@updateUser');
      
    $app->delete('user/{id}','UserController@deleteUser');
});




