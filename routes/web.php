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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\DashboardController@index');
Route::resource('libros',App\Http\Controllers\BookController::class)->names('books')->middleware('auth');
Route::resource('categorias',App\Http\Controllers\CategoryController::class)->names('categories')->middleware('auth');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
