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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'Admin\LoginController@index')->name('admin.login');
    Route::post('/login', 'Admin\LoginController@login')->name('admin.checklogin');
    Route::group(['middleware' => ['auth']], function() {
        Route::get('/home', 'Admin\PageAdminController@index')->name('admin.home');
        Route::get('/member', 'Admin\MemberController@index')->name('admin.member');
        Route::get('/addmember', 'Admin\MemberController@add')->name('admin.addmember');
    });
});
