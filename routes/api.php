<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::put('/change-password', [UserController::class, 'changePassword']);
// Route::get('/arbitrators', [ArbitratorController::class, 'getArbitrators'])->name('arbitrators.get');

// Route::post('/arbitrators', [ArbitratorController::class, 'store'])->name('arbitrators.store');

// Route::put('/arbitrators/{arbitrator}', [ArbitratorController::class, 'update'])->name('arbitrators.update');

// Route::put('/arbitrators-state/{arbitrator}', [ArbitratorController::class, 'updateState'])->name('arbitrators.updateState');

// Route::put('/arbitrators', [ArbitratorController::class, 'resetArbitratorsState'])->name('arbitrators.resetState');

// Route::delete('/arbitrators', [ArbitratorController::class, 'delete'])->name('arbitrators.delete');
