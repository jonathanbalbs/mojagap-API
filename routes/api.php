<?php

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

/**
 * User routes
 */
Route::group([

    'middleware' => 'company',
    'prefix' => 'auth'

], function ($router) {

    Route::post('company-login', 'AuthController@login');
    Route::post('company-logout', 'AuthController@logout');
    Route::post('company-refresh', 'AuthController@refresh');
    Route::post('company-me', 'AuthController@me');

});

/**
 * Company routes
 */
Route::group([

    'middleware' => 'company',
    'prefix' => 'auth'

], function ($router) {

    Route::post('company-login', 'AuthCompanyController@login');
    Route::post('company-logout', 'AuthCompanyController@logout');
    Route::post('company-refresh', 'AuthCompanyController@refresh');
    Route::post('company-me', 'AuthCompanyController@me');

});


/**
 * Transaction routes
 */
Route::get('transactions', 'TransactionsController@index');
Route::get('transactions/{id}', 'TransactionsController@show');
Route::post('transactions', 'TransactionsController@store');
Route::put('transactions/{id}', 'TransactionsController@update');
//Route::delete('transactions/{id}', 'TransactionsController@destroy');

/**
 * VirualCard routes
 */
Route::get('virtualcards', 'VirtualCardsController@index');
Route::get('virtualcards/{id}', 'VirtualCardsController@show');
Route::post('virtualcards', 'VirtualCardsController@store');
Route::put('virtualcards/{id}', 'VirtualCardsController@update');
//Route::delete('virtualcards/{id}', 'VirtualCardsController@destroy');

/**
 * MomoPayment routes
 */
Route::get('momopayments', 'MomoPaymentController@index');
Route::get('momopayments/{id}', 'MomoPaymentsController@show');
Route::post('momopayments', 'MomoPaymentsController@store');
Route::put('momopayments/{id}', 'MomoPaymentsController@update');
//Route::delete('momopayments/{id}', 'MomoPaymentsController@destroy');
