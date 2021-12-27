<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\CategorysController;
use App\Http\Controllers\videosController;

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
Route::get('users', [UsersController::class, 'clinet/index']);

Route::get('/', function () {
    return view('client/home');
});
Route::get('/course-3', function () {
    return view('client/course-3');
});
Route::get('/about', function () {
    return view('client/about');
});
Route::get('/contact', function () {
    return view('client/about');
});
Route::get('/login', function () {
    return view('client/login2');
});

Route::get('/resetpass', function () {
    return view('client/resetpass');
});
Route::get('/client/login2/create', 'UsersController@create');
Route::post('/client/login2/store', 'UsersController@store');

//Auth

// Route::get('/logout', ['as' => 'getLogout', 'users' => 'UsersController@getLogout']);


Route::get('/index', function () {
    return view('admin/test');
})->middleware('checkAdminLogin');
// Route::get('/editkhoahoc', function () {
//     return view('editkhoahoc');
// });



Route::get('quanlykhachhang', 'UsersController@index');


Route::get('/themchude', function () {
    return view('admin/QLCD/themchude');
});


Route::get('/themvideo', function () {
    return view('admin/QLVD/themvideo');
});

Route::get('/themkhoahoc', function () {
    return view('admin/QLKH/themkhoahoc');
});
Route::get('/admin/QLKH/themkhoahoc/create', 'CoursesController@create');
Route::post('/admin/QLKH/themkhoahoc/store', 'CoursesController@store');
Route::get('/admin/QLKH/quanlykhoahoc', 'CoursesController@index');
Route::get('/admin/QLKH/suakhoahoc/edit/{id}', 'CoursesController@edit');
Route::post('/admin/QLKH/suakhoahoc/update/{id}', 'CoursesController@update');
Route::DELETE('/admin/QLKH/quanlykhoahoc/delete/{id}', 'CoursesController@destroy');

Route::get('/client/login2', 'UsersController@login');
Route::post('/client/login2', 'UsersController@postlogin');




//


Route::get('/admin/QLCD/quanlychude', 'CategorysController@index');
Route::get('/admin/QLCD/themchude/create', 'CategorysController@create');
Route::post('/admin/QLCD/themchude/store', 'CategorysController@store');
Route::get('/admin/QLCD/suachude/edit/{id}', 'CategorysController@edit');
Route::post('/admin/QLCD/suachude/update/{id}', 'CategorysController@update');
Route::DELETE('/admin/QLCD/quanlychude/delete/{id}', 'CategorysController@destroy');



Route::get('/admin/QLVD/quanlyvideo', 'videosController@index');
Route::get('/admin/QLVD/themvideo/create', 'videosController@create');
Route::post('/admin/QLVD/themvideo/store', 'videosController@store');
Route::get('/admin/QLVD/suavideo/edit/{id}', 'videosController@edit');
Route::post('/admin/QLVD/suavideo/update/{id}', 'videosController@update');
Route::DELETE('/admin/QLVD/quanlyvideo/delete/{id}', 'videosController@destroy');




Route::get('/admin/QLUS/quanlykhachhang', 'UsersController@index');
