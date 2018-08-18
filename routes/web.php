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




Route::get('/career', 'ApplicationController@g_apply');













//Register page

Route::get('admin/register', 'AdminController@g_register');
Route::post('admin/register', 'AdminController@p_register');

//Login page

Route::get('admin/login', function(){
    return view('admin/login');
});

Route::post('admin/login', 'AdminController@p_login');

Route::post('/apply_job', 'ApplicationController@p_apply');

Route::get('/login', function(){
    return view('/login');
});

Route::get('/register', function(){
    return view('/register');
});

Route::post('/register', 'CustomersController@p_register');

Route::post('/login', 'CustomersController@p_login');





Route::get('/admin/career', 'ApplicationController@g_loan')->middleware("guest");

Route::get('/admin/career/{id}', 'ApplicationController@g_loan')->middleware("guest");

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

//Route::get('hadmin/index', 'AdminController@g_index')->middleware("guest");

//Route::get('/hadmin/{id}', 'AdminController@g_index')->middleware("guest");

//Route::get('/hadmin', 'AdminController@g_index')->middleware("guest");

//Route::get('/hadmin', 'AdminController@g_index')->middleware("guest");

//admin index

Route::get('/admin', 'AdminController@g_index')->middleware("guest");

Route::get('/admin/index', 'AdminController@g_index')->middleware("guest");

//Route::get('/admin/index', function(){
 //   return view('admin/index');
//})->middleware("guest");

Route::get('/admin/logout', 'AdminController@p_logout');

