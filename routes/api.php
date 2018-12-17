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


Route::get('/posts',"PostsController@index")->name('posts');
Route::get('/post/{id}',"PostsController@show")->name('posts.show');
Route::post('/posts',"PostsController@store")->name('posts.stroe');
Route::put('/post/{id}',"PostsController@update")->name('posts.update');
Route::delete('/post/{id}',"PostsController@destroy")->name('posts.delete');
