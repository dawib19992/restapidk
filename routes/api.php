<?php

use App\Http\Controllers\Api\peopleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('kus/305381/people', [peopleController::class, 'index']);
Route::post('kus/305381/people', [peopleController::class, 'create']);
Route::get('kus/305381/people/{people}', [peopleController::class, 'read']);
Route::put('kus/305381/people/{people}', [peopleController::class, 'update']);
Route::delete('kus/305381/people/{people}', [peopleController::class, 'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
