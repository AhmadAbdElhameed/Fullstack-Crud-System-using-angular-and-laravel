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
    return view('front.index');
});



Route::get('/admin/login', function () {
    return view('backend.login');
});

Route::get('/admin/index', function () {
    return view('backend.index');
});

Route::get('/admin/forgot-password', function () {
    return view('backend.forgot-password');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
