<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\StoryController;
use App\Http\Controllers\Api\ReelsController;

// ---------- AUTH ----------
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// ---------- POSTS ----------
Route::middleware('auth:sanctum')->group(function() {
    Route::get('/feed', [PostController::class, 'feed']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::get('/posts/{id}', [PostController::class, 'show']);
});

// ---------- STORIES ----------
Route::middleware('auth:sanctum')->group(function() {
    Route::post('/stories', [StoryController::class, 'store']);
    Route::get('/stories', [StoryController::class, 'index']);
});

// ---------- REELS ----------
Route::middleware('auth:sanctum')->group(function() {
    Route::post('/reels', [ReelsController::class, 'store']);
    Route::get('/reels', [ReelsController::class, 'index']);
});