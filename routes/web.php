<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth']);;
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index')->middleware(['auth']);;

Route::get('/admin/users', [App\Http\Controllers\UserController::class, 'index'])->name('admin.users')->middleware(['auth','App\Http\Middleware\Role']);;
Route::get('/admin/users/edit/{user}', [App\Http\Controllers\UserController::class, 'edit'])->name('admin.users.edit')->middleware(['auth','App\Http\Middleware\Role']);;
Route::get('/admin/users/create/', [App\Http\Controllers\UserController::class, 'create'])->name('admin.users.create')->middleware(['auth','App\Http\Middleware\Role']);;
Route::post('admin/users/store', [App\Http\Controllers\UserController::class , 'store'])->name('admin.users.store')->middleware(['auth','App\Http\Middleware\Role']);
Route::put('/admin/users/update/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('admin.users.update')->middleware(['auth','App\Http\Middleware\Role']);;
Route::get('/admin/users/edit_password/{user}', [App\Http\Controllers\UserController::class, 'edit_password'])->name('admin.users.edit_password')->middleware(['auth']);;
Route::put('/admin/users/update_password/{user}', [App\Http\Controllers\UserController::class, 'update_password'])->name('admin.users.update_password')->middleware(['auth']);;
Route::delete('/admin/users/delete/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('admin.users.destroy')->middleware(['auth','App\Http\Middleware\Role']);;
//Auth::routes();


