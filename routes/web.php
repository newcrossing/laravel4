<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EduController;

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

Route::get('/', [PostController::class, 'index']);
Route::get('/test2/', [PostController::class, 'test']);
Route::get('/post/', [PostController::class, 'list'])->name('post');
Route::get('/post/{id}', [PostController::class, 'single']);

Route::get('/edu/sort/', [EduController::class, 'sort']);
Route::get('/edu/task/{id}', [EduController::class, 'task']);

Route::get('/test',     function () {       })->middleware('auth:admin');

// Authentication  Route

Route::get('/admin', [AdminController::class, 'loginPage']);
Route::get('/admin/index', [AdminController::class, 'index']);






//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
