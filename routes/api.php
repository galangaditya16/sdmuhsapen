<?php

use App\Http\Controllers\Backend\TinyCloudController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('tiny-news',[TinyCloudController::class,'news'])->name('tiny.news');
Route::post('tiny-program',[TinyCloudController::class,'programs'])->name('tiny.program');
Route::post('tiny-content',[TinyCloudController::class,'content'])->name('tiny.content');





