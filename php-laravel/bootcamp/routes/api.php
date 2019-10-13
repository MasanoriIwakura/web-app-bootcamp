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

Route::get('diaries', 'Api\DiaryController@index')
    ->name('api.diary.index');

Route::get('diaries/{id}', 'Api\DiaryController@show')
    ->name('api.diary.edit');

Route::post('diaries', 'Api\DiaryController@store')
    ->name('api.diary.create');

Route::put('diaries/{id}', 'Api\DiaryController@update')
    ->name('api.diary.update');
