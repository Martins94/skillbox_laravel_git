<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbacksController;
use App\Http\Controllers\PostsController;

Route::resource('/posts', PostsController::class);
/*
Route::get('/', [PostsController::class, 'index'])->name('main');
Route::get('/about', [PostsController::class, 'about'])->name('about');
Route::post('/posts', [PostsController::class, 'store'])->name('posts');
Route::get('/posts/create', [PostsController::class, 'create'])->name('create');
Route::get('/posts/{post}', [PostsController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostsController::class, 'edit'])->name('posts.edit');
Route::patch('/posts/{post}', [PostsController::class, 'update'])->name('posts.update');
Route::delete('posts/{post}', [PostsController::class, 'destroy'])->name('posts.delete');*/

Route::get('/contacts', [FeedbacksController::class, 'contacts'])->name('contacts');
Route::get('/admin/feedbacks', [FeedbacksController::class, 'feedback'])->name('admin.feedbacks');
Route::post('/feedback', [FeedbacksController::class, 'store'])->name('feedbacks');
