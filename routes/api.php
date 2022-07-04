<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function(){
    Route::prefix('auth')->group(function(){
        Route::post('register', [AuthController::class, 'register']);
        Route::post('login', [AuthController::class, 'login']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('me', [AuthController::class, 'me']);
    });

    Route::middleware('jwt.verify')->group(function() {
        Route::apiResource('news', NewsController::class, [
            'as'=>'berita'
        ]);
    });

    Route::middleware('jwt.verify')->group(function() {
        Route::apiResource('categories', CategoryController::class, [
            'as'=>'kategori'
        ]);
    });
});
    
Route::any('{any}', function() {
    return response()->json([
        'status' => 'error',
        'message' => 'Resource not found'
    ], 400);
})->where('any', '.*');