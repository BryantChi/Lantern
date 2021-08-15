<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->get('api/getCity', 'Api\\ApiController@getCity');
    $router->get('api/getDistrict', 'Api\\ApiController@getDistrict');

    $router->resource('templeinfo', TempleInfoController::class);

    $router->resource('adherentinfo', AdherentInfoController::class);

    $router->resource('lighterinfo', LighterInfoController::class);

});
