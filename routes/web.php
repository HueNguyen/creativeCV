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

Route::get('/admin', function () {
    return view('admins.home');
});
Route::get('/', function () {
    return view('admins.home');
});
Route::get('/admin/education', function () {
    return view('admins.education');
});
Route::get('/admin/product', function () {
    return view('admins.products');
});
Route::get('/admin/blogs', function () {
    return view('admins.blogs');
});
