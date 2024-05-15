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
Route::get('students', [StudentController::class, 'index']);
Route::post('student/add', [StudentController::class, 'store']);
Route::get('student/{product}', [StudentController::class, 'show']);
Route::post('student/{product}', [StudentController::class, 'update']);
Route::delete('student/{product}', [StudentController::class, 'destroy']);

//Группа роутов для классов
Route::get('students', [GradeController::class, 'index']);
Route::post('student/add', [GradeController::class, 'store']);
Route::get('student/{product}', [GradeController::class, 'show']);
Route::post('student/{product}', [GradeController::class, 'update']);
Route::delete('student/{product}', [GradeController::class, 'destroy']);
