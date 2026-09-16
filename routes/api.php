<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

Route::middleware(['auth:sanctum'])->group(function (){
    Route::get('/user', [UserController::class, 'show']);
//    Route::get('/tasks', [TaskController::class, 'index']);

});

