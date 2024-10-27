<?php

use App\Http\Controllers\FolderController;

Route::get('/folders', [FolderController::class, 'index']);
Route::get('/folders/{id}', [FolderController::class, 'show']);
Route::post('/folders', [FolderController::class, 'store']);
Route::put('/folders/{id}', [FolderController::class, 'update']);
Route::delete('/folders/{id}', [FolderController::class, 'destroy']);