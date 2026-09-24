<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserApiController;
use App\Http\Controllers\Api\TaskApiController;


Route::middleware(['auth:sanctum'])->group(function (){
    Route::get('/user', [UserApiController::class, 'show']);
    Route::get('/tasks', [TaskApiController::class, 'index']);
    Route::post('/tasks', [TaskApiController::class, 'store']);
});

