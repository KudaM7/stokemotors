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

$router->get('/', function(){
    return (["data" => "Welcome to the Stoke Motors Api"]);
});

$router->group(['prefix' => 'vehicles'], static function () use ($router) {
    $router->get('/', 'VehiclesController@listVehicles');
    $router->get('/makes', 'VehiclesController@listMakes');
    $router->get('/models', 'VehiclesController@listModels');
    $router->get('/{vehicleId}', 'VehiclesController@vehicleDetails');

    $router->post('/create', 'VehiclesController@create');
});
