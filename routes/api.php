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

Route::get('/api/v1/menu', 'UserController@index');


Route::group(['prefix' => 'v1'], function () {
    Route::get('menu', 'UserController@index');
    Route::get('menu/{id}', 'UserController@show');
    Route::post('menu', 'UserController@store');
    Route::put('menu/{id}', 'UserController@update');
    Route::delete('menu/{id}', 'UserController@destroy');
});

