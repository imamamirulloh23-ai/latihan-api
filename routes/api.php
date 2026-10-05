<?php
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CategoryController;

// Route::get('/products', [ProductController::class, 'index']);
// Route::get('/products/{id}', [ProductController::class, 'show']);

Route::apiResource('products', ProductController::class);
Route::apiResource('categories', CategoryController::class);
