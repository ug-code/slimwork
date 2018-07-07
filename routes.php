<?php

use Illuminate\Routing\Router;

/** @var $router Router */

$router->group(['namespace' => 'App\Controllers'], function (Router $router) {
    $router->get('/','IndexController@getIndex');
    $router->post('/','IndexController@postIndex');
});

// catch-all route
$router->any('{any}', function () {
    return 'Error Baby';
})->where('any', '(.*)');
