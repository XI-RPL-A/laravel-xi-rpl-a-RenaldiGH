<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;



Route::get('/', HomeController::class);

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [ProductController::class, 'marbelEduGames']);
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'marbelAndFriends']);
    Route::get('/riri-story-books', [ProductController::class, 'ririStoryBooks']);
    Route::get('/kolak-kids-songs', [ProductController::class, 'kolakKidsSong']);
});

Route::prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index']);
    Route::get('/{slug}', [NewsController::class, 'detail']);
});

Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganIndustri']);
});

Route::get('/about-us', [AboutController::class, 'about']);