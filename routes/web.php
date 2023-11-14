<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\RoleController;
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

Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin.dashbaord');

Route::get('/admin/categories',[CategoryController::class,'index'])->name('admin.categories.index');
Route::get('/admin/categories/create',[CategoryController::class,'create'])->name('admin.categories.create');
Route::post('/admin/categories/store',[CategoryController::class,'store'])->name('admin.categories.store');
Route::get('/admin/categories/delete/{id}',[CategoryController::class, 'delete'])->name('admin.categories.delete');
Route::get('/admin/categories/show/{id}',[CategoryController::class, 'show'])->name('admin.categories.show');
Route::get('/admin/categories/edit/{id}',[CategoryController::class, 'edit'])->name('admin.categories.edit');
Route::post('/admin/categories/update',[CategoryController::class,'update'])->name('admin.categories.update');


Route::get('/admin/roles',[RoleController::class,'index'])->name('admin.roles.index');
Route::get('/admin/roles/create',[RoleController::class,'create'])->name('admin.roles.create');
Route::post('/admin/roles/store',[RoleController::class,'store'])->name('admin.roles.store');
Route::get('/admin/roles/delete/{id}',[RoleController::class, 'delete'])->name('admin.roles.delete');
Route::get('/admin/roles/show/{id}',[RoleController::class, 'show'])->name('admin.roles.show');
Route::get('/admin/roles/edit/{id}',[RoleController::class, 'edit'])->name('admin.roles.edit');
Route::post('/admin/roles/update',[RoleController::class,'update'])->name('admin.roles.update');
