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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', [UserController::class, 'index']);

Route::post('/register', function() {
    return 'Post request is working';
});

Route::put('/update/{id}', function() {
    return 'put request is working';
});

Route::patch('/patch-update/{id}', function() {
    return 'patch request is working';
});

Route::delete('/delete/{id}', function() {
    return 'delete request is working';
});