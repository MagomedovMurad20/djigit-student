<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GradeController;

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

//Группа роутов для студентов
Route::get('/student', [StudentController::class, 'index']);
Route::post('/student/add', [StudentController::class, 'store']);
Route::get('/student/{student}', [StudentController::class, 'show']);
Route::post('/student/{student}', [StudentController::class, 'update']);
Route::delete('/student/{student}', [StudentController::class, 'destroy']);

//Группа роутов для классо
Route::get('/grade', [GradeController::class, 'index']);
Route::post('/grade/add', [GradeController::class, 'store']);
Route::get('/grade/{student}', [GradeController::class, 'show']);
Route::post('/grade/{student}', [GradeController::class, 'update']);
Route::delete('/grade/{student}', [GradeController::class, 'destroy']);
