<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\LeadController;
use App\Http\Controllers\Admin\EstimationController;

Route::prefix('admin')->group(function () {
    
    Route::post('register', [RegisterController::class, 'register']);
    Route::post('login', [RegisterController::class, 'login']);

    Route::middleware(['auth:admin'])->group(function () {
        
        Route::post('logout', [RegisterController::class, 'logout']);

       
        Route::prefix('leads')->group(function () {
            Route::post('/', [LeadController::class, 'index']);
            Route::post('/{id}', [LeadController::class, 'show']);
            Route::post('/add', [LeadController::class, 'store']);
            Route::put('/update/{id}', [LeadController::class, 'update']);
            Route::delete('/remove/{id}', [LeadController::class, 'destroy']);
        });
    
        Route::prefix('estimations')->group(function () {
            Route::post('/', [EstimationController::class, 'index']);
            Route::post('/add', [EstimationController::class, 'store']);
            Route::post('/{estimation}', [EstimationController::class, 'show']);
            Route::put('/update/{estimation}', [EstimationController::class, 'update']);
            Route::delete('/remove/{estimation}', [EstimationController::class, 'destroy']);
        });
       
    });

});


