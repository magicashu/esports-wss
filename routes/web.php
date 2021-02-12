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
Route::get('/lol', function(){
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('new-login',function(){
    return view('newLogin');
});
Route::get('new-register',function(){
    return view('newRegister');
});
Route::get('forgot',function(){
    return view('newForgot');
});
Route::get('/lul', 'App\Http\Controllers\TournamentController@index');
Route::get('/table',function(){
    return view('table');
});

Route::post('/fifa','App\Http\Controllers\TournamentController@fifa');

Route::post('/create','App\Http\Controllers\TournamentController@create');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
