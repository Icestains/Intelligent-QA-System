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



Route::group(['middleware' => ['login']], function () {
    //　首页视图
    Route::get('/admin', function () {
        return view('app');
    });

    Route::get('/QA', 'AppController@getQA');
});

//　登录界面视图
Route::get('/login', function () {
    return view('login');
});



//　获取用户名
Route::get('/username', 'AppController@getUsername');

//　用户登录
Route::post('/login/verify/', 'AppController@login');

//　用户登出
Route::get('/logout', 'AppController@logout');

//　清空所有QA对
Route::delete('/QA/all/', 'AppController@clearAllQA');

//　新增QA对
Route::post('/QA/', 'AppController@addQA');



// ================================= 以下是面向用户的路由

//　登录界面视图
Route::get('/', function () {
    return view('qa');
});


//　登录界面视图
Route::get('/app', function () {
    return view('qa');
});


//　用户提问
Route::get('/app/ask', 'FeController@ask');