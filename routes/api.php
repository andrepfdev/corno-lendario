<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');





// Route::prefix('v1')->group(function () {
//     // CRUD Cornos
//     Route::post('/cornos', [CornoController::class, 'store']);
//     Route::get('/cornos', [CornoController::class, 'index']);
//     Route::get('/cornos/{id}', [CornoController::class, 'show']);
//     Route::put('/cornos/{id}/pontuacao', [CornoController::class, 'updatePontuacao']);
//     Route::delete('/cornos/{id}', [CornoController::class, 'destroy']);
    
//     // Rankings e Stats
//     Route::get('/ranking', [CornoController::class, 'ranking']);
//     Route::get('/stats', [CornoController::class, 'stats']);
// });