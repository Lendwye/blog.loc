<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\PostsPageController;
use App\Http\Controllers\PostPageController;
use App\Http\Controllers\UsersPageController;
use App\Http\Controllers\UserPageController;
use App\Http\Controllers\SearchPageController;

Auth::routes();

Route::get('/', [MainPageController::class, 'index'])->name('home');

Route::get('/posts', [PostsPageController::class, 'index']);
Route::get('/post', [PostPageController::class, 'index']);

Route::get('/users', [UsersPageController::class, 'index']);
Route::get('/user', [UserPageController::class, 'index']);

Route::get('/search', [SearchPageController::class, 'index']);
