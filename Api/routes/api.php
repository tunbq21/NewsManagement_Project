<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\NewsController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('author',AuthorController::class);

 Route::apiResource('image',ImageController::class);


// Route::get('images', [ImageController::class, 'index']);           
// Route::post('images', [ImageController::class, 'store']);          
// Route::get('images/{id}', [ImageController::class, 'show']);    
// Route::put('images/{id}', [ImageController::class, 'update']);  
// Route::delete('images/{id}', [ImageController::class, 'destroy']); 


Route::apiResource('news',NewsController::class);
