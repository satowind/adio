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

Route::get('/', function () {
    return view('index'); 
});

Route::get('/index', function () {
    return view('index'); 
});

Route::get('/contact', function () {
    return view('contact'); 
});

Route::get('/about', function () {
    return view('about'); 
});

Route::get('/services', function () {
    return view('services'); 
});

Route::get('/mission', function () {
    return view('mision'); 
});

Route::get('/core', function () {
    return view('core'); 
});

Route::get('/vision', function () {
    return view('vision'); 
});

Route::get('/team', function () {
    return view('team'); 
});

Route::get('/thrust', function () {
    return view('thrust'); 
});

Route::get('/board', function () {
    return view('board'); 
});

Route::get('/hybrid', function () {
    return view('hybrid'); 
});

Route::get('/moni', function () {
    return view('moni'); 
});

Route::get('/blog', "PostController@g_blog");