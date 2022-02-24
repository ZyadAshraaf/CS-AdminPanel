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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', function () {
    return view('Admin.profile');
});

Route::get('/admin', function () {
    return view('Admin.admin');
});

Route::get('/faqs', function () {
    return view('faqs.faqs');
});

Route::get('/news', function () {
    return view('news.news');
});

Route::get('/student', function () {
    return view('student.student');
});
