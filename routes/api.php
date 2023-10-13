<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
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

Route::prefix("product")->group( function () {
    Route::get("/",[ProductController::class,'index']);
    Route::post("/",[ProductController::class,'create']);
    Route::put("/{_productId}",[ProductController::class,'update']);
});

Route::prefix("transaction")->group( function () {
    Route::get("/",[ProductController::class,'index']);
    Route::post("/",[ProductController::class,'create']);
    Route::put("/{_transactionId}",[ProductController::class,'update']);
});

Route::prefix("auth")->group( function () {
    Route::post("/signin",[ProductController::class,'signin']);
    Route::post("/register",[ProductController::class,'register']);
});
