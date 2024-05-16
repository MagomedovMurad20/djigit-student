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
Route::post('students/add', [StudentController::class, 'store']);
Route::get('students/{student}', [StudentController::class, 'show']);
Route::post('students/{student}', [StudentController::class, 'update']);
Route::delete('students/{student}', [StudentController::class, 'destroy']);

//Группа роутов для классов
Route::get('students', [GradeController::class, 'index']);
Route::post('students/add', [GradeController::class, 'store']);
Route::get('students/{student}', [GradeController::class, 'show']);
Route::post('students/{student}', [GradeController::class, 'update']);
Route::delete('students/{student}', [GradeController::class, 'destroy']);
