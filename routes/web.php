<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get("/", [PostController::class, 'index'])->name("index.post");
Route::get("/posts", [PostController::class, 'posts'])->name("posts");
Route::get("/post/find", [PostController::class, 'find_post'])->name("find_post");
Route::put("/post/{id}", [PostController::class, 'update_post'])->name("post_update");
Route::get("/post/delete/{id}", [PostController::class, 'delete_post'])->name("post_delete");
Route::post("/store", [PostController::class, 'store'])->name("add.post");

