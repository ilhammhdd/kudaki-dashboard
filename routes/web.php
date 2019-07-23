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
Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home.landing']);
Route::get('/organizer', ['uses' => 'HomeController@indexOrganizer', 'as' => 'home.organizer']);
Route::get('/signup', ['uses' => 'AuthController@indexSignUp', 'as' => 'auth.indexSignUp']);
Route::post('/signup', ['uses' => 'AuthController@signUp', 'as' => 'auth.signUp']);
Route::get('/login', ['uses' => 'AuthController@indexLogin', 'as' => 'auth.indexLogin']);
Route::post('/login', ['uses' => 'AuthController@login', 'as' => 'auth.login']);
Route::get('/failed', ['uses' => 'HomeController@failed', 'as' => 'failed']);
Route::post('/event', ['uses' => 'EventController@addEvent', 'as' => 'event.add']);
Route::get('/transactions', ['uses' => 'HomeController@transactions', 'as' => 'transactions']);