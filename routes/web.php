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

use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});
Route::get('hello', 'App\Http\Controllers\HelloController@index');
Route::post('hello', 'App\Http\Controllers\HelloController@post');
// Route::get('hello', 'App\Http\Controllers\HelloController@index')->middleware('hello');
Route::get('hello/add', 'App\Http\Controllers\HelloController@add');
Route::post('hello/add', 'App\Http\Controllers\HelloController@create');
Route::get('hello/edit', 'App\Http\Controllers\HelloController@edit');
Route::post('hello/edit', 'App\Http\Controllers\HelloController@update');
Route::get('hello/del', 'App\Http\Controllers\HelloController@del');
Route::post('hello/del', 'App\Http\Controllers\HelloController@remove');
Route::get('hello/show', 'App\Http\Controllers\HelloController@show');
Route::get('person', 'App\Http\Controllers\PersonController@index');
Route::get('board', 'App\Http\Controllers\BoardController@index');
Route::get('board/add', 'App\Http\Controllers\BoardController@add');
Route::post('board/add', 'App\Http\Controllers\BoardController@create');