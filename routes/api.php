<?php

use App\Http\Controllers\CategoryController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function () {
    return response()->json([
        'message' => 'Successful JSON response'
    ], 200);
});

Route::get('/question', function () {
    return response()->json([
        'message' => 'Successful JSON response for questions'
    ], 200);
});

Route::get('/categories', 'CategoryController@index');
Route::get('/categories/{id}', 'CategoryController@show');