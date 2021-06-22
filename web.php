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

//backend
Route::get('/admin', function (){
    return view('admin_login');
});

Route::get('/dashboard', function (){
    return view('admin_layout');
});

Route::post('/admin dashboard', function(){
    return view('/admin.dashboard');
});

// Route::get('/admin','AdminController@index' );
// Route::get('/dashboard','AdminController@show_dashboard');
// Route::get('/logout','AdminController@logout');
// Route::post('/admin dashboard','AdminController@dashboard'); //lấy cái admin để đăng nhập





