<?php

use Illuminate\Support\Facades\Route;


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

// Everyone
Route::get('/', function () {return view('home');});
Route::get('about', function () {return view('about');});
Route::get('cafe', function () {return view('cafe');});
Route::get('contact', function () {return view('contact');});
Route::get('post', function () {return view('post');});
// Blog
Route::get('blog', 'BlogController@listPost');
Route::get('blog/{name}/{date}', 'BlogController@viewPost');
// Subscribe
Route::post('/', [ 'as' => '/', 'uses' => 'BlogController@newSubscriber']);
// Message
Route::post('newmessage', 'BlogController@newMessage');
// Admin
Route::post('blog', [ 'as' => 'blog', 'uses' => 'AdminController@newPost']);
// Login for Admin
Route::get('login', [ 'as' => 'login', 'uses' => 'LoginController@getLogin']);
Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@postLogin']);
Route::get('logout', [ 'as' => 'logout', 'uses' => 'LogoutController@getLogout']);