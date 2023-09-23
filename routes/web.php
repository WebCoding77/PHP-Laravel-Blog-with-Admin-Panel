<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\posts\PostsController;
use App\Http\Controllers\admins\AdminsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\posts\PostsController::class, 'index'])->name('index');

Route::group(['prefix' => 'posts'], function() {

    Route::get('/single/{id}', [App\Http\Controllers\posts\PostsController::class, 'single'])->name("single");
    Route::get('/create', [App\Http\Controllers\posts\PostsController::class, 'create'])->name("create");
    Route::post('/store', [App\Http\Controllers\posts\PostsController::class, 'store'])->name("store.post");
    Route::get('/delete/{id}', [App\Http\Controllers\posts\PostsController::class, 'delete'])->name("delete.post");
    Route::get('/edit/{id}', [App\Http\Controllers\posts\PostsController::class, 'edit'])->name("edit.post");
    Route::post('/update/{id}', [App\Http\Controllers\posts\PostsController::class, 'update'])->name("update.post");
    Route::get('/fuck', [App\Http\Controllers\posts\PostsController::class, 'fuck']);

});


Route::get('admin/login', [App\Http\Controllers\admins\AdminsController::class, 'adminLogin'])->name("admins.login");
Route::post('admin/login', [App\Http\Controllers\admins\AdminsController::class, 'checkLogin'])->name("admins.check.login");
Route::get('admin', [App\Http\Controllers\admins\AdminsController::class, 'index'])->name("admins.dashboard");




