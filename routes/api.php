<?php

use App\Api\Controllers\ProductCategoryController;
use App\Api\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('product/list', [ProductController::class, 'list']);
Route::post('product-category/list', [ProductCategoryController::class, 'list']);

