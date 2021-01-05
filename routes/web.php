<?php

use App\Http\Controllers\TagsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbacksController;
use App\Http\Controllers\PostsController;


Route::get('/posts/tags/{tag}', [TagsController::class, 'index']);
Route::resource('/posts', PostsController::class);

Route::get('/', function () { return redirect('/posts'); });

Route::get('/about', [PostsController::class, 'about'])->name('about');

Route::get('/contacts', [FeedbacksController::class, 'contacts'])->name('contacts');
Route::get('/admin/feedbacks', [FeedbacksController::class, 'feedback'])->name('admin.feedbacks');
Route::post('/feedback', [FeedbacksController::class, 'store'])->name('feedbacks');

Auth::routes();
