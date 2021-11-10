<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\CategorysController;
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
    return view('client/index');
});
Route::get('/login', function () {
    return view('client/login2');
});
Route::get('/resetpass', function () {
    return view('client/resetpass');
});
Route::get('/login/create', 'UsersController@create');
Route::post('/login/store', 'UsersController@store');


// Route::get('/editkhoahoc', function () {
//     return view('editkhoahoc');
// });

Route::get('/home', function () {
      return view('manage/home');
});

Route::get('quanlykhachhang', 'UsersController@index');


Route::get('quanlykhoahoc', 'CoursesController@index');
Route::DELETE('/quanlykhoahoc/{id}', 'CoursesController@destroy');
Route::get('/insertandedit/editkhoahoc/{id}', 'CoursesController@edit');
Route::post('/insertandedit/editkhoahoc/{id}', 'CoursesController@update');
// Route::get('/editkhoahoc', 'CoursesController@showform');
// Route::post('/editkhoahoc', 'CoursesController@validationform');

Route::get('/themkhoahoc', function () {
    return view('insertandedit/themkhoahoc');
});
Route::get('/insertandedit/themkhoahoc/create', 'CoursesController@create');
Route::post('/insertandedit/themkhoahoc/store', 'CoursesController@store');

Route::get('/quanlychude', function () {
    return view('quanlychude');
});
Route::get('quanlychude', 'CategorysController@index');
Route::get('/insertandedit/editchude/{id}', 'CategorysController@edit');
Route::post('/insertandedit/editchude/{id}', 'CategorysController@update');
Route::DELETE('/quanlychude/{id}', 'CategorysController@destroy');

Route::get('/themchude', function () {
    return view('insertandedit/themchude');
});
Route::get('/insertandedit/themchude/create', 'CategorysController@create');
Route::post('/insertandedit/themchude/store', 'CategorysController@store');



