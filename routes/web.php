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
    return view('site.login.sign-in');
});
/****/
/***** Login Forms ****/
Route::get('/sign-in', function () {
    return view('site.login.sign-in');
});
Route::get('/sign-up', function () {
    return view('site.login.sign-up');
});
Route::get('/sign_mobile', function () {
    return view('site.login.sign_mobile');
});
Route::get('/forgot-pass', function () {
    return view('site.login.forgot-pass');
});
Route::get('/confirmation-code', function () {
    return view('site.login.confirmation-code');
});
Route::get('/new-password', function () {
    return view('site.login.new-password');
});

/**********************/



