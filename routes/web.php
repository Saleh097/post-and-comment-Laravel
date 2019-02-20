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

Route::post('/','Indexx@loginOrSignUp');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/wc', function () {
    return view('welcome');
});

Route::get('/dashboard','Dashboardd@index');
Route::post('/dashboard','Dashboardd@handleForm');

Route::get('/addPost','Postss@index');
Route::post('/addPost','Postss@handleForm');

Route::get('/managePosts','managePostss@index');
Route::post('/managePosts','managePostss@handleForm');

Route::get('/showPosts','ShowPostss@index');
Route::post('/showPosts','ShowPostss@handleForm');