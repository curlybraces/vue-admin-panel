<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'currency'], function ($router) {
    Route::get('/getCurrency', 'API\CurrencyController@getCurrency');
    Route::get('/getCurrency/{currency}', 'API\CurrencyController@getCurrencyByCode');
});
Route::group(['prefix' => 'filemanager'], function ($router) {
    Route::post('/createDir', 'API\FileManagerController@createDir');
    Route::get('/getAllDirs', 'API\FileManagerController@getAllDir');
});