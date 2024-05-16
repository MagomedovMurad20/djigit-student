<?php

use App\Http\Controllers\GradeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\StudentController;
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

//Группа роутов для студентов
Route::get('/students', [StudentController::class, 'index']);
Route::post('/students/add', [StudentController::class, 'store']);
Route::get('/students/{student}', [StudentController::class, 'show']);
Route::post('/students/{student}', [StudentController::class, 'update']);
Route::delete('/students/{student}', [StudentController::class, 'destroy']);

//Группа роутов для классов
Route::get('/grades', [GradeController::class, 'index']);
Route::post('/grades/add', [GradeController::class, 'store']);
Route::get('/grades/{grade}', [GradeController::class, 'show']);
Route::post('/grades/{grade}', [GradeController::class, 'update']);
Route::delete('/grades/{grade}', [GradeController::class, 'destroy']);

//Группа роутов для лекций
Route::get('/lessons', [LessonController::class, 'index']);
Route::post('/lessons/add', [LessonController::class, 'store']);
Route::get('/lessons/{lesson}', [LessonController::class, 'show']);
Route::post('/lessons/{lesson}', [LessonController::class, 'update']);
Route::delete('/lessons/{lessons}', [LessonController::class, 'destroy']);
