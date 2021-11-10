<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CoursesController;
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
Route::get('users', [UsersController::class, 'index']);

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login2');
});

Route::get('/login/create', 'UsersController@create');
Route::post('/login/store', 'UsersController@store');

Route::get('/resetpass', function () {
    return view('resetpass');
});
Route::get('/editkhoahoc', function () {
    return view('editkhoahoc');
});
Route::get('/editchude', function () {
    return view('editchude');
});
Route::get('/home', function () {
      return view('home');
});

Route::get('/quanlykhachhang', 'UsersController@index');

Route::get('/quanlykhoahoc', 'CoursesController@index');


Route::get('/quanlychude', function () {
    return view('quanlychude');
});

Route::get('/themkhoahoc', function () {
    return view('themkhoahoc');
});
Route::get('/themchude', function () {
    return view('themchude');
});
Route::get('/themkhoahoc/create', 'CoursesController@create');
Route::post('/themkhoahoc/store', 'CoursesController@store');
Route::DELETE('/quanlykhoahoc/{id}', 'CoursesController@destroy');
Route::get('/editkhoahoc/{id}', 'CoursesController@edit');
Route::post('/editkhoahoc/{id}', 'CoursesController@update');
Route::get('/editkhoahoc', 'CoursesController@showform');
Route::post('/editkhoahoc', 'CoursesController@validationform');
// Route::PATCH('/editkhoahoc/{id}', 'CoursesController>@update');
