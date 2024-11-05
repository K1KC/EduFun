<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WriterController;

Route::get('/', [PostController::class, 'showAllPost']);
Route::get('/category/{category}', [PostController::class, 'showCategoryContent']);
Route::get('/post/{title}', [PostController::class, 'getPostPerTitle']);
Route::get('/writers', [WriterController::class, 'showAllWriters']);
Route::get('/writers/{name}', [WriterController::class, 'showAllWriterPost']);
Route::get('/popular', [PostController::class, 'showPopularPost']);
Route::get('/about-us', function() {
    return view('content.about_us');
});
