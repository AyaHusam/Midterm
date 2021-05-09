<?php
use Illuminate\Support\Facades\Route;

use Illuminate\App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/content','App\Http\Controllers\ContactController@index');
Route::get('/create' ,'App\Http\Controllers\ContactController@create');
Route::post('/store','App\Http\Controllers\ContactController@store');
Route::get('/edit/{id}' , 'App\Http\Controllers\ContactController@edit');
Route::post('/update/{id}','App\Http\Controllers\ContactController@update');
Route::get('/delete/{id}' ,'App\Http\Controllers\ContactController@delete');
