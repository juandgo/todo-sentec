<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [TodoController::class, 'index']);
// Route::post('/', [TodoController::class, 'store']);
// Route::patch('/{todo}', [TodoController::class, 'update']);
// Route::delete('/{todo}', [TodoController::class, 'destroy']);

Route::controller(TodoController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::patch('/{todo}', 'update');
    Route::delete('/{todo}', 'destroy');
});
