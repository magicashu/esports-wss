<?php

use Illuminate\Support\Facades\Route;
use resources\views\user;

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
Route::get('/','App\Http\Controllers\TournamentController@display_all');
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route::get('new-register',function(){
//     return view('resources\views\user\newRegister.blade.php');
// });
Route::get('forgot',function(){
    return view('newForgot');
});
Route::get('/lul', 'App\Http\Controllers\TournamentController@index');
//Route::get('/test','App\Http\Controllers\TournamentController@display');
Route::get('/table',function(){
    return view('table');
});

Route::post('/fifa','App\Http\Controllers\TournamentController@fifa');

Route::post('/create','App\Http\Controllers\TournamentController@create');
Route::get('/test','App\Http\Controllers\TournamentController@display_valorant');
Route::post('/test','App\Http\Controllers\TournamentController@display_valorant');
Route::get('/cool','App\Http\Controllers\TournamentController@cool');
Route::post('/dude','App\Http\Controllers\TournamentController@display_valorant_d');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('user')->group(function()
{
    Route::get('/login', 'App\Http\Controllers\Auth\UserLoginController@showLoginForm')->name('user.login');
    Route::post('/login', 'App\Http\Controllers\Auth\UserLoginController@login')->name('user.login.submit');
    Route::get('/register','App\Http\Controllers\UserController@register')->name('user.register');
    Route::get('/', 'App\Http\Controllers\UserController@index')->name('user.index');


});

Route::prefix('admin')->group(function() {
    Route::get('/login', 'App\Http\Controllers\Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'App\Http\Controllers\Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/','App\Http\Controllers\AdminController@index')->name('admin.dashboard');
});
