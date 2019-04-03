<?php

Route::group(['middleware' => 'web', 'prefix' => 'simacars', 'namespace' => 'Modules\SimACARS\Http\Controllers'], function()
{
    Route::get('/', 'SimACARSController@index');
});
