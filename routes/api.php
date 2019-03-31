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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Route main
 */

Route::get('/auth', function () {
    return response()->json(["Please, login"], 401);
});

/**
 * Login
 */
Route::get('login', function () {
    return response()->json(["message" => "Unauthenticated."], 401);
})->name('login');

Route::post('login', 'Auth\LoginController@auth');

Route::middleware('auth:api')->group(function () {

    Route::get('logout', 'Auth\LoginController@logout');

    /**
     * Generals
     */

    Route::get('/departments', 'General\GeneralController@consultAllDepartments');
    Route::get('/municipalities/{department_id}', 'General\GeneralController@consultMunicipalitiesByDeparment');

    /**
     * Clients
     */
    Route::resource('clients', 'Client\ClientController');

    /**
     * Users
     */
    Route::resource('users', 'User\UserController');

});
