<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\AdminPostController;
use App\Http\Controllers\DocController;
use App\Http\Controllers\EduController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Adm\HomeController;

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
Route::get('/', [PostController::class, 'index']);
Route::get('/test2/', [PostController::class, 'test']);
Route::get('/post/', [PostController::class, 'list'])->name('post');
Route::get('/doc/', [DocController::class, 'list'])->name('doc');
Route::get('/post/{id}', [PostController::class, 'single']);

Route::get('/edu/sort/', [EduController::class, 'sort']);
Route::get('/edu/task/{id}', [EduController::class, 'task']);

Route::get(
    '/test',
    function () {
    }
)->middleware('auth:admin');


// Authentication  Route
//Route::get('/admin', [AdminController::class, 'loginPage']);
Route::middleware(['auth', 'isadmin'])->group(
    function () {
        // Route::get('/admin/index', [AdminController::class, 'index']);
        //  Route::get('/admin/post', [AdminPostController::class, 'index']);
    }
);


Route::group(
    ['middleware' => ['role:admin']],
    function () {
        //Route::get('/admin/index', [AdminController::class, 'index']);
    }
);

Route::middleware(['role:admin'])->prefix('admin')->group(
    function () {
        //Route::get('/adm', [\App\Http\Controllers\Adm\HomeController::class, 'index']);
        Route::get('/', [HomeController::class, 'index'])->name('homeAdmin');
        Route::resource('post', App\Http\Controllers\Adm\PostController::class);
    }
);


//Auth::routes();
Auth::routes(
    [
        'login' => true,
        'logout' => true,
        'register' => true,
        'reset' => true,   // for resetting passwords
        'confirm' => false,  // for additional password confirmations
        'verify' => false,  // for email verification
    ]
);

Route::get('logout', [LoginController::class, 'logout'])->name('logout');


