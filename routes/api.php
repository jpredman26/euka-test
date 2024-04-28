<?php

use App\Http\Controllers\LessonController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

// Routes for students
Route::prefix('students')->group(function () {
    Route::get('{id}', [StudentController::class, 'show']);
    Route::get('{id}/activities', [StudentController::class, 'activities']);
});

// Routes for teachers
Route::prefix('teachers')->group(function () {
    Route::get('{id}', [TeacherController::class, 'show']);
    Route::get('{id}/lessons', [TeacherController::class, 'classes']);
});

// Routes for lessons
Route::prefix('classes')->group(function () {
    Route::get('{id}', [LessonController::class, 'show']);
    Route::get('{id}/students', [LessonController::class, 'students']);
});
