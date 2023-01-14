<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AdminController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {return $request->user();});

// Routes
// List Task
Route::get('/task', [TaskController::class, 'Page']);
// Create Task
Route::post('/task', [TaskController::class, 'Create']);
// List Stats
Route::get('/task/stats', [TaskController::class, 'LoadStats']);
// List All Users
Route::get('/user/all', [UserController::class, 'ListAll']);
Route::get('/admin/all', [AdminController::class, 'ListAll']);

