<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminPostsController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\PostsController;


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

Route::get('/', [PostsController::class, 'index']);
Route::get('/posts/{id}', [PostsController::class, 'show']);

// Đăng nhập
Route::get('/login', [AdminLoginController::class, 'login'])->name('login');
Route::post('/login_action', [AdminLoginController::class, 'login_action'])->name('login.action');

// Đăng xuất
Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');


// Admin
    // Đổi mật khẩu admin
    Route::get('/admin/password', [AdminLoginController::class, 'password'])->name('password');
    Route::post('/admin/password_action', [AdminLoginController::class, 'password_action'])->name('password.action');


    Route::get('/admin', [AdminPostsController::class, 'index'])->name('admin.posts');
    Route::get('/admin/posts', [AdminPostsController::class, 'index'])->name('admin.posts');
    Route::get('/admin/create_posts', [AdminPostsController::class, 'create'])->name('admin.posts.create');
    Route::post('/admin/create_posts', [AdminPostsController::class, 'store'])->name('admin.posts.store');
    Route::get('/admin/posts/{id}', [AdminPostsController::class, 'show'])->name('admin.posts.show');
    Route::get('/admin/posts/edit/{id}', [AdminPostsController::class, 'edit'])->name('admin.posts.edit');
    Route::PATCH('/admin/posts/update/{id}', [AdminPostsController::class, 'update'])->name('admin.posts.update');
    Route::DELETE('/admin/posts/delete/{id}', [AdminPostsController::class, 'delete'])->name('admin.posts.delete');

    Route::get('/admin/user', [AdminUserController::class, 'index'])->name('admin.user');
    Route::get('/admin/create_user', [AdminUserController::class, 'create'])->name('admin.user.create');
    Route::post('/admin/create_user', [AdminUserController::class, 'store'])->name('admin.user.store');
    Route::get('/admin/user/edit/{id}', [AdminUserController::class, 'edit'])->name('admin.user.edit');
    Route::PATCH('/admin/user/update/{id}', [AdminUserController::class, 'update'])->name('admin.user.update');
    Route::DELETE('/admin/user/delete/{id}', [AdminUserController::class, 'delete'])->name('admin.user.delete');
