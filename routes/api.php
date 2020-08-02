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
Route::middleware('auth:api')->get('/userme', function (Request $request) {
    return auth()->user();
});

Route::apiResource('people', 'PersonController');
Route::apiResource('products', 'ProductController');
Route::get('utility/producttypes', 'ProductTypeController@index');
Route::get('utility/producttypes/{product_type}', 'ProductTypeController@show');

Route::group(['middleware' => ['role:super-admin']], function () {
    Route::post('utility/producttypes', 'ProductTypeController@store');
    Route::put('utility/producttypes/{product_type}', 'ProductTypeController@update');
    Route::delete('utility/producttypes/{product_type}', 'ProductTypeController@delete');
});
