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
Route::group(['mddleware' => 'auth:api'], function () {
    Route::get('users', 'UsersController@index');
    Route::get('users/{id}', 'UsersController@show');
    Route::post('users', 'UsersController@store');
    Route::put('users/{id}', 'UsersController@update');
    //Route::delete('users/{id}', 'UsersController@destroy');
});

/**
 * Company routes
 */
Route::group(['mddleware' => 'auth:company'], function () {
    Route::get('companies', 'CompaniesController@index');
    Route::get('companies/{id}', 'CompaniesController@show');
    Route::post('companies', 'CompaniesController@store');
    Route::put('companies/{id}', 'CompaniesController@update');
    //Route::delete('companies/{id}', 'CompaniesController@destroy');
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
