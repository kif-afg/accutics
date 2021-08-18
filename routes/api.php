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

Route::resource('compaigns', 'App\Http\Controllers\CompaignController');
Route::get('search/{search}', 'App\Http\Controllers\UsersController@Search');
Route::resource('users', 'App\Http\Controllers\UsersController');
Route::resource('inputs', 'App\Http\Controllers\InputsController');

