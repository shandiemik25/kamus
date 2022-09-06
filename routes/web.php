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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/app', function () {
    return view('app');
});

Route::get('/app-add','DataController@index')->name('app-add');

// Route::get('app-add', 'App\Http\Controllers\DataController@index');
Route::get('create', 'App\Http\Controllers\DataController@create');