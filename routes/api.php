<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/banks', 'BanksController@index');
    Route::get('/banks/{code}', 'BanksController@show');
});
