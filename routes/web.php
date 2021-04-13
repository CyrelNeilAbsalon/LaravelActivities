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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users', 'UserControlller@index')->name('users');
// Route::get('/users', [UserControlller::class, 'index'])->name('users');
Route::post('/users', 'UserControlller@store')->name('user.store');
// Route::post('/users', [UserControlller::class, 'store'])->name('user.store');
Route::get('/users/create', 'UserControlller@create');
// Route::post('/users/create', [UserControlller::class, 'create']);
Route::get('/users/{id}', 'UserControlller@show')->name('users.show');
// Route::post('/users/{id}', [UserControlller::class, 'show'])->name('user.show');

Route::resource('/posts', App\Http\Controllers\PostController::class);
