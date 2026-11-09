<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserApiController;
use App\Http\Controllers\Api\TaskApiController;


Route::middleware(['auth:sanctum'])->group(function (){
    Route::get('/user', [UserApiController::class, 'show']);
    Route::put('/user/update-name', [UserApiController::class, 'updateName']);
    Route::put('/user/update-email', [UserApiController::class, 'updateEmail']);
    Route::put('/user/update-password', [UserApiController::class, 'updatePassword']);
    Route::get('/tasks', [TaskApiController::class, 'index']);
    Route::post('/tasks', [TaskApiController::class, 'store']);
    Route::get('/tasks/{task}', [TaskApiController::class, 'show']);
    Route::put('/tasks/{task}', [TaskApiController::class, 'update']);
    Route::delete('/tasks/{task}', [TaskApiController::class, 'destroy']);
});

