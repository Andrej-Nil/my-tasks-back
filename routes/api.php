<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
//
//// 1. ПУБЛИЧНЫЙ РОУТ (доступен без авторизации)
//// Ссылка: http://backend.local
//Route::get('/public-news', function () {
//    return response()->json([
//        ['id' => 1, 'title' => 'Проект успешно запущен на Open Server 6!'],
//        ['id' => 2, 'title' => 'Laravel и React теперь работают в связке.'],
//    ]);
//});
//
//// 2. ЗАЩИЩЕННЫЙ РОУТ (доступен ТОЛЬКО после успешного входа)
//// Ссылка: http://backend.local
//Route::middleware('auth:sanctum')->get('/my-private-tasks', function (Request $request) {
//    return response()->json([
//        ['id' => 1, 'task' => 'Секретная задача: Сделать крутое приложение', 'status' => 'В процессе'],
//        ['id' => 2, 'task' => 'Купить кофе для ночных посиделок за кодом', 'status' => 'Сделано'],
//        // Laravel Breeze также автоматически знает, КТО залогинился:
//        ['id' => 3, 'task' => 'Задание лично для пользователя: ' . $request->user()->name, 'status' => 'Важно']
//    ]);
//});
