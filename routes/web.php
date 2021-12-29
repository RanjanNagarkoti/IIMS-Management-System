<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [HomeController::class, 'index']);

    Route::resource('class', ClassController::class);

    Route::resource('teacher', TeacherController::class);

    Route::resource('student', StudentController::class);

    Route::resource('subject', SubjectController::class);

    Route::resource('section', SectionController::class);

    Route::resource('faculty', FacultyController::class);

    Route::resource('setting', SettingController::class);
});

require __DIR__ . '/auth.php';
