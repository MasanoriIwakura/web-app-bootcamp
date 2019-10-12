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

Route::get('diaries', 'Api\Diary\IndexDiaryController')
    ->name('api.diary.index');

Route::get('diaries/{id}', 'Api\Diary\EditDiaryController')
    ->name('api.diary.edit');
