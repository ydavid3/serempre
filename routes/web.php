<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

/**
 * Load views
 */

Route::get('/', function () {
    return View::make('login.login');
});

Route::prefix('view')->group(function () {
    Route::get('/clients', function () {
        return View::make('dashboard.clients');
    });
    Route::get('/clients/create', function () {
        return View::make('dashboard.client');
    });
});
