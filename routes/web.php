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

Route::get('/', 'PageController@index');
Route::get('/contact', 'PageController@contact');
Route::get('/about', 'PageController@about');

Route::get('/admin','AdminController@index');
Route::get('/admin/posts','AdminController@posts');
Route::get('/admin/posts/new','AdminController@new_post_form');
Route::post('/admin/posts/new','AdminController@new_post_add');
Route::get('/admin/posts/{post}/edit','AdminController@edit_post_form');
Route::post('/admin/posts/{post}/edit','AdminController@edit_post_edit');
Route::post('/admin/posts/{post}/delete','AdminController@delete_post');


Route::get('/admin/users','AdminController@users');
Route::get('/admin/users/new','AdminController@new_user_form');
Route::post('/admin/users/new','AdminController@new_user_add');
Route::get('/admin/users/{user}/edit','AdminController@edit_user_form');
Route::post('/admin/users/{user}/edit','AdminController@edit_user_edit');
Route::post('/admin/users/{user}/delete','AdminController@delete_user');


//Auth::routes();




// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login')->middleware('non_admin');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');


// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/posts/{post}/show','PostController@show');
Route::post('/posts/{post}/comment','PostController@add_comment');


Route::get('login/{provider}', 'Auth\SocialLoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\SocialLoginController@handleProviderCallback');

