<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('api/v1')->group(function () {
    Route::group(['namespace' => 'Onburd\MarketActivation\Http\Controllers', 'middleware' => ['api']], function () {
        Route::group(['prefix' => 'markets'], function ($router) {
            Route::get('/', 'MarketActivationController@getMarkets');
        });

    });
});
