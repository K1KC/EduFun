<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WriterController;

Route::get('/', [PostController::class, 'showAllPost'])->name('/');
Route::get('/category/{category}', [PostController::class, 'showCategoryContent'])->name('category');
Route::get('/post/{post_id}', [PostController::class, 'getPostPerId'])->name('post');

Route::get('/writer-list', [WriterController::class, 'showAllWriters'])->name('writer.list');
Route::get('/writer/{name}', [WriterController::class, 'showAllWriterPost'])->name('writer.name');
Route::get('/popular', [PostController::class, 'showPopularPost'])->name('popular');
Route::get('/about-us', function() {
    return view('content.about_us');
})->name('about_us');
