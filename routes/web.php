<?php

use App\Http\Controllers\webController\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'base']);

Route::get('/posts', [PostController::class, 'page']);

Route::prefix('/blog')->name("blog")->group(function (){
    Route::get('/posts',[PostController::class, 'index'])->name(".posts");
    Route::get('/{nom}',[PostController::class, 'post']);

});


