<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; // ✅ tambahkan ini untuk panggil controller
use App\Http\Controllers\MoodController;
use App\Http\Controllers\MoodCheckInController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Di sini kamu bisa mendefinisikan semua route untuk API kamu.
| File ini otomatis dimuat oleh RouteServiceProvider dalam grup "api".
|
*/

// 🔒 Endpoint default untuk ambil data user yang login (kalau pakai auth)
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api'); // ganti ke 'auth:api' jika pakai JWT

// ✅ Route untuk autentikasi pengguna
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::post('/mood/check-in', [MoodController::class, 'checkIn']);
    Route::get('/mood/history', [MoodController::class, 'history']);
});


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/mood-check-ins', [MoodCheckInController::class, 'index']);
    Route::post('/mood-check-ins', [MoodCheckInController::class, 'store']);
});