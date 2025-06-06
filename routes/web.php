<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\AuthController;
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\user\FoundController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\FoundItemController;
use App\Http\Middleware\UserIsLogin;
use App\Http\Middleware\AdminIsLogin;

Route::get('/login', [AuthController::class, 'loginView']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerView']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware(UserIsLogin::class)->group(function() {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/found', [FoundController::class, 'foundView']);
    Route::post('/submit', [FoundController::class, 'upload']);
    Route::get('/details/{id}', [FoundController::class, 'detailsView']);
});

Route::middleware(AdminIsLogin::class)->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/foundItem', [FoundItemController::class, 'index']);
    Route::get('/foundItem/create', [FoundItemController::class, 'create']);
    Route::post('/foundItem/store', [FoundItemController::class, 'store']);
    Route::get('/foundItem/edit/{id}', [FoundItemController::class, 'edit']);
    Route::put('/foundItem/{id}', [FoundItemController::class, 'update']);
    Route::delete('/foundItem/{id}', [FoundItemController::class, 'delete']);
});