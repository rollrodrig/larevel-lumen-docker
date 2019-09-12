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
    return $router->app->version().' '.config('roll.demo');
});

$router->get('/roll/{id}', function ($id) {
    return "Hola roll ".$id.config('roll.demo');;
});

$router->get('profile', [
    'as' => 'profile', 'uses' => 'ExampleController@exampletest'
]);