<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\ProductAccessMiddleware;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//tas 1
Route::apiResource('images', Products::class);

Route::apiResource('public', PublicController::class);

//task 2
Route::apiResource('/products', ProductController::class)->middleware(productaccess::class);

// task 3 
