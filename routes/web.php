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

Route::get('/', "PostController@g_index");

Route::get('/index', "PostController@g_index");

Route::get('/contact', function () {
    return view('contact'); 
});

Route::get('/about', function () {
    return view('about'); 
});

Route::get('/advisory', function () {
    return view('advisory'); 
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

Route::get('/board', function () {
    return view('board'); 
});

Route::get('/thrust', function () {
    return view('thrust'); 
});

Route::get('/management', function () {
    return view('management'); 
});

Route::get('/apply_for_loan', function () {
    return view('apply_for_loan'); 
});

Route::get('/hybridbhank', function () {
    return view('hybridbhank'); 
});

Route::get('/hybridmoney', function () {
    return view('hybridmoni'); 
});

Route::get('/hybridmoni', function () {
    return view('hybridmoni'); 
});

Route::get('/board/dele', function () {
    return view('dele'); 
});

Route::get('/board/juliet', function () {
    return view('juliet'); 
});

Route::get('/board/amaebi', function () {
    return view('Amaebi'); 
});


Route::get('/blog', "PostController@g_news");

Route::get('/news_single/{id}', "PostController@g_news_single");

Route::get('/news_single', "PostController@g_news_single");












//Register page

Route::get('admin/register', 'AdminController@g_register');
Route::post('admin/register', 'AdminController@p_register');

//Login page

Route::get('admin/login', function(){
    return view('admin/login');
});
Route::post('admin/login', 'AdminController@p_login');


Route::post('/apply_form', 'LoanController@p_apply');





Route::get('/admin/loan', 'LoanController@g_loan')->middleware("guest");

Route::get('/admin/loan/{id}', 'LoanController@g_loan')->middleware("guest");

Route::post('/admin/approve_loan', 'LoanController@g_approve_loan')->middleware("guest");

Route::post('/admin/decline_loan', 'LoanController@g_decline_loan')->middleware("guest");

// blog view

Route::get('/admin/editblog', 'PostController@g_editblog')->middleware("guest");

Route::get('/admin/editblog/{id}', 'PostController@g_editblog')->middleware("guest");

//blog admin

Route::post('admin/remove_blog', 'PostController@p_delete_blog');

Route::post('admin/update_blog', 'PostController@p_update_blog');

Route::post('admin/addblog', 'PostController@p_add_blog');

Route::get('admin/blog/{id}', 'PostController@g_blog')->middleware("guest");

Route::get('admin/blog', 'PostController@g_blog')->middleware("guest");

//addblog

Route::get('admin/addblog', 'PostController@g_addblog')->middleware("guest");

Route::get('hadmin/index', 'AdminController@g_index')->middleware("guest");

Route::get('/hadmin/{id}', 'AdminController@g_index')->middleware("guest");

//Route::get('/hadmin', 'AdminController@g_index')->middleware("guest");

//Route::get('/hadmin', 'AdminController@g_index')->middleware("guest");

//admin index

Route::get('/admin', function(){
    return view('admin/index');
})->middleware("guest");

Route::get('/admin/index', function(){
    return view('admin/index');
})->middleware("guest");

Route::get('/admin/logout', 'AdminController@p_logout');

