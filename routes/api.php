<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
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
    Route::put("/{productId}",[ProductController::class,'update']);
});

Route::prefix("transaction")->group( function () {
    Route::get("/",[TransactionController::class,'index']);
    Route::post("/",[TransactionController::class,'create']);
    Route::put("/{transactionId}",[TransactionController::class,'update']);
});

Route::prefix("auth")->group( function () {
    Route::post("/signin",[AuthController::class,'signIn']);
    Route::post("/register",[AuthController::class,'register']);
});
