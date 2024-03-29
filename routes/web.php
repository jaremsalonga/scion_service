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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

/**
 * Routes for resource users-controller
 */

/**
 * Routes for resource users
 */
$router->get('users', 'UsersController@all');
$router->get('users/{id}', 'UsersController@get');
$router->post('users', 'UsersController@add');
$router->put('users/{id}', 'UsersController@put');
$router->delete('users/{id}', 'UsersController@remove');
