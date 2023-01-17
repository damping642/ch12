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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/modify/user', 'Auth\UserController@modifyUser')->name('modify.user');
Route::post('/modify/user', 'Auth\UserController@modifyUserData')->name('modify.user.data');
Route::get('/modify/user/pwd', 'Auth\UserController@modifyUserPwd')->name('modify.user.pwd');
Route::post('/modify/user/pwd', 'Auth\UserController@modifyUserPwdData')->name('modify.user.pwd.data');
Route::get('/delete/user', 'Auth\UserController@deleteUser')->name('delete.user');
Route::post('/delete/user', 'Auth\UserController@deleteUserData')->name('delete.user.data');