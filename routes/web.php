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

$router->get('/', ['as' => 'home', function () use ($router) {
    return view('index');
}]);

$router->get('/currencies', ['as' => 'currencies', 'uses' => 'CurrencyController@index']);
$router->get('/currencies/{id}', ['as' => 'currency', 'uses' => 'CurrencyController@show']);
$router->get('/update', ['as' => 'update', 'uses' => 'CurrencyController@update']);
