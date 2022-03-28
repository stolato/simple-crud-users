<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->get('users', 'UsersController@index');
    $router->post('users', 'UsersController@store');
    $router->put('users/{id}', 'UsersController@update');
    $router->get('users/{id}', 'UsersController@show');
    $router->delete('users/{id}', 'UsersController@destroy');
    $router->get('addresses/states', 'AddressesController@states');
    $router->get('addresses/states/{id}/cities', 'AddressesController@cities');
});
