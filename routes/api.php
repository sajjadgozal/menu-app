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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'v1'], function () {
    Route::get('/menu/{menu}', 'App\Http\Controllers\MenuController@index');

    Route::group(['prefix' => 'item'], function () {
        Route::get('/', 'App\Http\Controllers\ItemController@index');
        Route::post('/', 'App\Http\Controllers\ItemController@create');
        Route::put('/{item}', 'App\Http\Controllers\ItemController@update');
        Route::delete('/{item}', 'App\Http\Controllers\ItemController@destroy');
    });
});




