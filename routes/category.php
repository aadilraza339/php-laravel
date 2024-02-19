<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;

 
Route::get('/category', [CategoryController::class, 'category']);
Route::get('/category/{id}', [CategoryController::class, 'show']);
