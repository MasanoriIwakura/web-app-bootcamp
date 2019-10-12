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
$router->prefix('/api')->group(function () use ($router) {
    $router->get('/diaries', 'Api/Diary/IndexDiaryController')
        ->name('api.diary.index');
});
