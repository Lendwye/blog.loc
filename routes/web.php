<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\PostsPageController;
use App\Http\Controllers\PostPageController;
use App\Http\Controllers\UsersPageController;
use App\Http\Controllers\UserPageController;
use App\Http\Controllers\SearchPageController;
use App\Http\Controllers\AuthorPageController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\Admin\AdminMainController;
use App\Http\Controllers\Admin\Post\AdminPostController;

Auth::routes();

Route::get('/', [MainPageController::class, 'index'])->name('home');

// PAGES

Route::get('/posts', [PostsPageController::class, 'index']);
Route::get('/post', [PostPageController::class, 'index']);

Route::get('/users', [UsersPageController::class, 'index']);
Route::get('/user', [UserPageController::class, 'index']);

Route::get('/author', [AuthorPageController::class, 'index']);

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
	Route::get('/', [AdminMainController::class, 'index'])->name('admin.index');
	Route::group(['namespace' => 'Post'], function () {
		Route::get('/post', [AdminPostController::class, 'index'])->name('admin.post.index');
	});
});

Route::get('/search', [SearchPageController::class, 'index']);
