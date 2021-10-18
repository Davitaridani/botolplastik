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

$router->get('home', 'HomeController@home');
$router->get('about', 'AboutController@index');
$router->get('products', 'ProductController@index');
$router->get('contact', 'ContactController@index');
$router->get('products/details/{id}', 'ProductController@details');

