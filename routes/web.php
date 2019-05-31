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

Route::get('/student', function () {
    return view('front.index');
});
Route::get('/contact', function () {
    return view('front.contact');
});
Route::get('/course', function () {
    return view('front.course');
});

Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/calendar', function () {
    return view('admin.calendar');
});
Route::get('/manager_student', function () {
    return view('admin.manager_student');
});
Route::get('/teachers', function () {
    return view('admin.teacher');
});
Route::get('/assignment', function () {
    return view('admin.assignment');
});
Route::get('/department', function () {
    return view('admin.department');
});
Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/room', function () {
    return view('admin.room');
});
Route::get('/transcript', function () {
    return view('admin.transcript');
});

Route::get('/user', function () {
    return view('admin.user');
});
