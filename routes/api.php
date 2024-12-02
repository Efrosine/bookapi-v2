<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BookReviewController;
use App\Http\Controllers\LendingController;
use App\Http\Controllers\UserLendingsController;

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);

Route::apiResource('books', BookController::class)->only(['index', 'show']);
Route::apiResource('reviews', ReviewController::class)->only(['index', 'show']);

Route::middleware(['role:user,admin', 'auth:sanctum'])->group(function () {
    Route::get('users/{user}', [UserController::class, 'show']);
    Route::get('users/{user_id}/lendings', UserLendingsController::class);
    Route::get('books/{book_id}/reviews', BookReviewController::class);
    Route::put('reviews/{review}', [ReviewController::class, 'update']);
});

Route::middleware(['role:admin', 'auth:sanctum'])->group(function () {
    Route::apiResource('user', UserController::class)->except(['show']);
    Route::apiResource('books', BookController::class)->except(['index', 'show']);
    Route::apiResource('reviews', ReviewController::class)->except(['show', 'index']);
    Route::apiResource('lendings', LendingController::class);
});

